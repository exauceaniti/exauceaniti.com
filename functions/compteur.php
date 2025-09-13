<?php
//fonction pour ajouter_une vue
function ajouter_une_vue()
{

    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    $fichier_journalier = $fichier . '_' . date('Y_m_d');
    incrementer_compteur($fichier);
    incrementer_compteur($fichier_journalier);
}

//fonction pour incrementer le compteur
// Le fichier n'existe pas, on le crée et on initialise à 1
function incrementer_compteur(string $fichier): void
{
    $compteur = 1;
    if (file_exists($fichier)) {
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
    }
    file_put_contents($fichier, $compteur);
}

//fonction pour retourner le nombre de vues
function nombre_vues(): string
{
    $fichoier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    return file_get_contents($fichoier);
}
