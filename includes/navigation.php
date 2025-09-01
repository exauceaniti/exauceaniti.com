<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="nav">
    <ul>
        <li><a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Accueil</a></li>
        <li><a href="about.php" class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">À propos</a></li>
        <li><a href="competences.php" class="<?= ($current_page == 'competences.php') ? 'active' : '' ?>">Compétences</a></li>
        <li><a href="formations.php" class="<?= ($current_page == 'formations.php') ? 'active' : '' ?>">Formations</a></li>
        <li><a href="project.php" class="<?= ($current_page == 'project.php') ? 'active' : '' ?>">Projets</a></li>
        <li><a href="contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
    </ul>
</nav>