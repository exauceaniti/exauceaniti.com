document.addEventListener('DOMContentLoaded', function() {
    const toggleSwitch = document.querySelector('.theme-toggle');
    const body = document.body;
    
    // Vérifier le thème précédemment sélectionné
    const currentTheme = localStorage.getItem('theme') || 'dark';
    
    // Appliquer le thème sauvegardé
    if (currentTheme === 'light') {
        document.documentElement.setAttribute('data-theme', 'light');
    } else {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
    
    // Fonction de changement de thème
    function switchTheme() {
        if (document.documentElement.getAttribute('data-theme') === 'dark') {
            document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
        }
    }
    
    // Événement sur le bouton de changement de thème
    if (toggleSwitch) {
        toggleSwitch.addEventListener('click', switchTheme);
    }
    
    // Détection du thème système
    if (currentTheme === 'system' || !currentTheme) {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
            document.documentElement.setAttribute('data-theme', 'light');
        }
        
        // Écouter les changements de préférence système
        window.matchMedia('(prefers-color-scheme: light)').addEventListener('change', e => {
            if (!localStorage.getItem('theme') || localStorage.getItem('theme') === 'system') {
                document.documentElement.setAttribute('data-theme', e.matches ? 'light' : 'dark');
            }
        });
    }
});