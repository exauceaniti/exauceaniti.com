document.addEventListener('DOMContentLoaded', () => {
    // --- MENU MOBILE ---
    function toggleMobileMenu() {
        const navMenu = document.getElementById('navMenu');
        const menuToggle = document.getElementById('menuToggle');
        const menuOverlay = document.querySelector('.menu-overlay');

        navMenu.classList.toggle('active');
        menuToggle.classList.toggle('active');
        menuOverlay.classList.toggle('active');

        document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
    }

    // Bouton menu mobile
    const menuToggleBtn = document.getElementById('menuToggle');
    if (menuToggleBtn) {
        menuToggleBtn.addEventListener('click', toggleMobileMenu);
    }

    // Fermer le menu en cliquant sur l'overlay
    document.querySelector('.menu-overlay').addEventListener('click', toggleMobileMenu);

    // Fermer le menu en cliquant sur un lien
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 968) {
                toggleMobileMenu();
            }
        });
    });

    // --- THEME TOGGLE ---
    const themeToggleDesktop = document.getElementById('themeToggleDesktop');
    const themeToggleMobile = document.getElementById('themeToggleMobile');
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
    let currentTheme = localStorage.getItem('theme') || (prefersDarkScheme.matches ? 'dark' : 'light');

    // Appliquer le thème au démarrage
    document.documentElement.setAttribute('data-theme', currentTheme);

    function toggleTheme() {
        const current = document.documentElement.getAttribute('data-theme');
        const newTheme = current === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);

        // Fermer menu mobile si actif
        const navMenu = document.getElementById('navMenu');
        if (navMenu && navMenu.classList.contains('active')) {
            toggleMobileMenu();
        }

        console.log("Theme switched to:", newTheme); // Debug console
    }

    if (themeToggleDesktop) {
        themeToggleDesktop.addEventListener('click', toggleTheme);
        console.log("Desktop toggle found ✅");
    } else {
        console.log("Desktop toggle NOT found ❌");
    }

    if (themeToggleMobile) {
        themeToggleMobile.addEventListener('click', (e) => {
            e.stopPropagation(); // évite que l’overlay capture le clic
            toggleTheme();
        });
        console.log("Mobile toggle found ✅");
    } else {
        console.log("Mobile toggle NOT found ❌");
    }

    // --- HEADER SCROLL ---
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
