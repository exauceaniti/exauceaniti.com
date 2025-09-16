document.addEventListener('DOMContentLoaded', () => {

    // --- VARIABLES ---
    const navMenu = document.getElementById('navMenu');
    const menuOverlay = document.querySelector('.menu-overlay');
    const themeToggle = document.getElementById('themeToggleDesktop'); // bouton unique
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
    let currentTheme = localStorage.getItem('theme') || (prefersDark.matches ? 'dark' : 'light');

    // --- INITIALISATION ---
    document.documentElement.setAttribute('data-theme', currentTheme);

    // --- MENU MOBILE ---
    const toggleMenu = () => {
        navMenu.classList.toggle('active');
        menuOverlay.classList.toggle('active');
        document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
    };

    // Ouvrir/fermer menu mobile sur petits écrans
    const menuToggleBtn = document.getElementById('menuToggle');
    if (menuToggleBtn) menuToggleBtn.addEventListener('click', toggleMenu);

    // Fermer menu en cliquant sur overlay ou lien
    menuOverlay.addEventListener('click', toggleMenu);
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 968 && navMenu.classList.contains('active')) toggleMenu();
        });
    });

    // --- THEME TOGGLE ---
    const toggleTheme = () => {
        const newTheme = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        console.log("Theme switched to:", newTheme);
    };

    if (themeToggle) themeToggle.addEventListener('click', toggleTheme);

    // --- HEADER SCROLL ---
    const header = document.querySelector('.header');
    const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 50);
    window.addEventListener('scroll', onScroll);
    onScroll(); // appliquer au chargement

    // --- RESPONSIVE : cacher menu si resize vers desktop ---
    window.addEventListener('resize', () => {
        if (window.innerWidth > 968 && navMenu.classList.contains('active')) toggleMenu();
    });

});
