// scripts/theme.js

// Gestion du changement de thème
document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.querySelector('.theme-toggle');
    const body = document.body;
    
    // Vérifier si un thème est déjà sauvegardé
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        body.classList.add(savedTheme);
    }
    
    // Gérer le clic sur le bouton de thème
    if (themeToggle) {
        themeToggle.addEventListener('click', function() {
            if (body.classList.contains('light-theme')) {
                body.classList.remove('light-theme');
                localStorage.setItem('theme', '');
            } else {
                body.classList.add('light-theme');
                localStorage.setItem('theme', 'light-theme');
            }
        });
    }
});