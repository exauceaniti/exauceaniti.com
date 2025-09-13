<?php
require_once __DIR__ . '/../functions/compteur.php';

/**
 * Classe StatistiquesVisites
 * -------------------------------
 * - Gère les statistiques des visites
 * - Affiche : Années → Mois → Jours
 * - Style accordéon (mois sous l'année)
 */
class StatistiquesVisites
{
    private $annee_actuelle;
    private $mois_actuel;
    private $annee_select;
    private $mois_select;
    private $mois_noms;

    public function __construct()
    {
        $this->annee_actuelle = date('Y');
        $this->mois_actuel = date('m');
        $this->annee_select = $_GET['annee'] ?? $this->annee_actuelle;
        $this->mois_select  = $_GET['mois'] ?? null;

        $this->mois_noms = [
            '01' => 'Janvier',
            '02' => 'Février',
            '03' => 'Mars',
            '04' => 'Avril',
            '05' => 'Mai',
            '06' => 'Juin',
            '07' => 'Juillet',
            '08' => 'Août',
            '09' => 'Septembre',
            '10' => 'Octobre',
            '11' => 'Novembre',
            '12' => 'Décembre'
        ];
    }

    /**
     * Affiche le tableau de bord
     */
    public function afficherTableauDeBord()
    {
        $total = nombre_vues(); // total des visites
        ob_start();
?>
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tableau de bord des statistiques</title>
            <style>
                /* ============================= */
                /* TABLEAU DE BORD               */
                /* ============================= */
                .dashboard {
                    font-family: 'Segoe UI', Arial, sans-serif;
                    max-width: 1200px;
                    margin: 20px auto;
                    padding: 20px;
                    background: #f9f9f9;
                    border-radius: 10px;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                }

                .dashboard h2 {
                    color: #2c3e50;
                    border-bottom: 2px solid #3498db;
                    padding-bottom: 10px;
                }

                .total {
                    font-size: 1.1em;
                    color: #7f8c8d;
                    margin-bottom: 25px;
                }

                /* ============================= */
                /* LAYOUT                        */
                /* ============================= */
                .conteneur-principal {
                    display: flex;
                    gap: 30px;
                }

                .section-annees {
                    flex: 1;
                    background: white;
                    border-radius: 8px;
                    padding: 20px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
                }

                .section-details {
                    flex: 2;
                    background: white;
                    border-radius: 8px;
                    padding: 20px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
                }

                /* ============================= */
                /* ANNEES + MOIS                 */
                /* ============================= */
                .item-annee,
                .item-mois {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 12px 15px;
                    border: 1px solid #e0e0e0;
                    border-radius: 6px;
                    text-decoration: none;
                    color: #2c3e50;
                    transition: all 0.2s ease;
                    margin-bottom: 8px;
                    cursor: pointer;
                }

                .item-mois {
                    text-decoration: none;
                }

                .item-annee:hover,
                .item-mois:hover {
                    background: #f0f7ff;
                    border-color: #3498db;
                    transform: translateY(-2px);
                }

                .item-annee.active,
                .item-mois.active {
                    background: #3498db;
                    color: white;
                    border-color: #3498db;
                }

                /* Badge de comptage */
                .badge {
                    background: #ecf0f1;
                    padding: 4px 10px;
                    border-radius: 12px;
                    font-size: 0.85em;
                    font-weight: 500;
                }

                .item-annee.active .badge,
                .item-mois.active .badge {
                    background: rgba(255, 255, 255, 0.2);
                    color: white;
                }

                /* ============================= */
                /* LISTE MOIS ACCORDÉON          */
                /* ============================= */
                .liste-mois {
                    display: none;
                    flex-direction: column;
                    gap: 8px;
                    margin-left: 15px;
                    margin-top: 5px;
                }

                .liste-mois.open {
                    display: flex;
                }

                /* ============================= */
                /* STATISTIQUES DETAIL           */
                /* ============================= */
                .statistiques-mois {
                    text-align: center;
                    margin: 20px 0;
                    padding: 20px;
                    background: #f8f9fa;
                    border-radius: 8px;
                }

                .stat-chiffre {
                    font-size: 2.5em;
                    font-weight: bold;
                    color: #3498db;
                    margin-bottom: 5px;
                }

                .stat-label {
                    color: #7f8c8d;
                    font-size: 0.9em;
                }

                .details-journaliers {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
                    gap: 10px;
                    margin-top: 15px;
                }

                .item-jour {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 8px 12px;
                    background: #f8f9fa;
                    border-radius: 6px;
                    border-left: 3px solid #3498db;
                }

                /* ============================= */
                /* RESPONSIVE                    */
                /* ============================= */
                @media (max-width: 768px) {
                    .conteneur-principal {
                        flex-direction: column;
                    }

                    .details-journaliers {
                        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
                    }
                }
            </style>
        </head>

        <body>
            <div class="dashboard">
                <h2>Statistiques des Visites</h2>
                <p class="total">Total: <strong><?= $total; ?></strong> visite<?= $total > 1 ? 's' : '' ?></p>

                <div class="conteneur-principal">
                    <!-- Colonne gauche : Années et Mois -->
                    <div class="section-annees">
                        <h3>Années</h3>
                        <div class="liste-annees">
                            <?php for ($i = 2024; $i <= 2030; $i++): ?>
                                <?php
                                $active = ($i == $this->annee_select) ? 'active' : '';
                                $stats_annee = $this->getStatsAnnee($i);
                                ?>
                                <div class="annee-bloc <?= $active ?>">
                                    <!-- Année -->
                                    <div class="item-annee" data-annee="<?= $i ?>">
                                        <span class="texte"><?= $i ?></span>
                                        <span class="badge"><?= $stats_annee ?> visites</span>
                                    </div>

                                    <!-- Mois -->
                                    <div class="liste-mois <?= ($i == $this->annee_select) ? 'open' : '' ?>" id="mois-<?= $i ?>">
                                        <?php foreach ($this->mois_noms as $num => $nom): ?>
                                            <?php
                                            $activeMois = ($num == $this->mois_select && $i == $this->annee_select) ? 'active' : '';
                                            $stats_mois = $this->getStatsMois($i, $num);
                                            ?>
                                            <a href="?annee=<?= $i ?>&mois=<?= $num ?>" class="item-mois <?= $activeMois ?>">
                                                <span class="texte"><?= $nom ?></span>
                                                <span class="badge"><?= $stats_mois ?> visites</span>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <!-- Colonne droite : Détails -->
                    <div class="section-details">
                        <?php if ($this->mois_select): ?>
                            <div class="section-stats">
                                <h3>Statistiques de <?= $this->mois_noms[$this->mois_select] ?> <?= $this->annee_select ?></h3>
                                <div class="statistiques-mois">
                                    <div class="stat-chiffre"><?= $this->getStatsMois($this->annee_select, $this->mois_select) ?></div>
                                    <div class="stat-label">visites ce mois</div>
                                </div>
                                <h4>Détails par jour</h4>
                                <div class="details-journaliers">
                                    <?php
                                    $jours_mois = cal_days_in_month(CAL_GREGORIAN, $this->mois_select, $this->annee_select);
                                    for ($jour = 1; $jour <= $jours_mois; $jour++):
                                        $stats_jour = $this->getStatsJour($this->annee_select, $this->mois_select, $jour);
                                        if ($stats_jour > 0):
                                    ?>
                                            <div class="item-jour">
                                                <span class="texte"><?= sprintf("%02d", $jour) ?> <?= substr($this->mois_noms[$this->mois_select], 0, 3) ?></span>
                                                <span class="badge"><?= $stats_jour ?> visites</span>
                                            </div>
                                    <?php
                                        endif;
                                    endfor;
                                    ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <p>Sélectionnez un mois pour voir les détails.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- JS Accordéon -->
            <script>
                document.querySelectorAll('.item-annee').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const annee = this.getAttribute('data-annee');
                        const blocMois = document.getElementById('mois-' + annee);

                        // Fermer tous les autres accordéons
                        document.querySelectorAll('.liste-mois').forEach(mois => {
                            if (mois !== blocMois) {
                                mois.classList.remove('open');
                            }
                        });

                        // Ouvrir/fermer l'accordéon actuel
                        blocMois.classList.toggle('open');
                    });
                });
            </script>
        </body>

        </html>
<?php
        return ob_get_clean();
    }

    // ===============================
    // 🔹 Méthodes internes (calcul)
    // ===============================
    private function getStatsAnnee($annee)
    {
        $total = 0;
        for ($mois = 1; $mois <= 12; $mois++) {
            $total += $this->getStatsMois($annee, sprintf("%02d", $mois));
        }
        return $total;
    }

    private function getStatsMois($annee, $mois)
    {
        $total = 0;
        $jours_mois = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
        for ($jour = 1; $jour <= $jours_mois; $jour++) {
            $total += $this->getStatsJour($annee, $mois, $jour);
        }
        return $total;
    }

    private function getStatsJour($annee, $mois, $jour)
    {
        $fichier = __DIR__ . '/../data/compteur_' . $annee . '_' . $mois . '_' . sprintf("%02d", $jour);
        return file_exists($fichier) ? (int)file_get_contents($fichier) : 0;
    }
}

// Instanciation et affichage
$statistiques = new StatistiquesVisites();
echo $statistiques->afficherTableauDeBord();
?>