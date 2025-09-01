/**
 * MAIN.JS
 * Script principal pour les animations et la navigation
 * Auteur: Exaucé Aniti
 * Version améliorée avec navigation mobile professionnelle
 */

// Attendre que le DOM soit complètement chargé
document.addEventListener('DOMContentLoaded', function() {
    
    /**
     * ANIMATION DES BARRES DE COMPÉTENCES
     * Anime les barres de progression quand elles deviennent visibles
     */
    const skillBars = document.querySelectorAll('.skill-progress');
    
    if (skillBars.length > 0) {
        // Configuration de l'Intersection Observer
        const observerOptions = {
            threshold: 0.5, // Déclencher quand 50% de l'élément est visible
            rootMargin: '0px 0px -50px 0px' // Déclencher un peu plus tôt
        };
        
        // Création de l'observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const width = entry.target.getAttribute('data-width');
                    entry.target.style.width = width;
                    entry.target.style.transition = 'width 1.5s ease-in-out';
                    observer.unobserve(entry.target); // Arrêter d'observer après animation
                }
            });
        }, observerOptions);
        
        // Initialiser toutes les barres à 0 et commencer l'observation
        skillBars.forEach(bar => {
            bar.style.width = '0';
            observer.observe(bar);
        });
    }
    
    /**
     * NAVIGATION MOBILE PROFESSIONNELLE
     * Gestion complète du menu hamburger avec animations fluides
     */
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.nav');
    const menuOverlay = document.querySelector('.menu-overlay');
    
    // Si les éléments existent
    if (menuToggle && nav && menuOverlay) {
        // Ajouter les attributs ARIA pour l'accessibilité
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-controls', 'main-navigation');
        nav.setAttribute('id', 'main-navigation');
        nav.setAttribute('aria-label', 'Navigation principale');
        
        // Fonction pour ouvrir/fermer le menu
        function toggleMenu() {
            const isOpening = !nav.classList.contains('active');
            
            nav.classList.toggle('active');
            menuToggle.classList.toggle('active');
            menuOverlay.classList.toggle('active');
            document.body.style.overflow = nav.classList.contains('active') ? 'hidden' : '';
            
            // Mise à jour de l'accessibilité
            const isExpanded = nav.classList.contains('active');
            menuToggle.setAttribute('aria-expanded', isExpanded);
            
            // Animation des liens
            if (isOpening) {
                animateMenuItems();
            }
        }
        
        // Animation progressive des éléments du menu
        function animateMenuItems() {
            const menuItems = document.querySelectorAll('.nav li');
            menuItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';
                
                setTimeout(() => {
                    item.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'translateX(0)';
                }, 100 + (index * 50)); // Délai progressif
            });
        }
        
        // Événement sur le bouton menu
        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleMenu();
        });
        
        // Fermer le menu en cliquant sur l'overlay
        menuOverlay.addEventListener('click', function() {
            if (nav.classList.contains('active')) {
                toggleMenu();
            }
        });
        
        // Fermer le menu en appuyant sur Échap
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && nav.classList.contains('active')) {
                toggleMenu();
            }
        });
        
        // Fermer le menu après avoir cliqué sur un lien
        const navLinks = document.querySelectorAll('.nav a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768 && nav.classList.contains('active')) {
                    toggleMenu();
                }
            });
        });
        
        // Navigation au clavier pour l'accessibilité
        const focusableElements = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
        
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Tab' && nav.classList.contains('active')) {
                const focusableContent = nav.querySelectorAll(focusableElements);
                
                if (focusableContent.length) {
                    const firstFocusableElement = focusableContent[0];
                    const lastFocusableElement = focusableContent[focusableContent.length - 1];
                    
                    if (e.shiftKey) { // shift + tab
                        if (document.activeElement === firstFocusableElement) {
                            lastFocusableElement.focus();
                            e.preventDefault();
                        }
                    } else { // tab
                        if (document.activeElement === lastFocusableElement) {
                            firstFocusableElement.focus();
                            e.preventDefault();
                        }
                    }
                }
            }
        });
        
        // Fermer le menu si on redimensionne vers une taille desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768 && nav.classList.contains('active')) {
                toggleMenu();
            }
        });
    }
    
    /**
     * ANIMATION AU DÉFILEMENT
     * Anime les éléments quand ils entrent dans le viewport
     */
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.skill-category, .project-card, .about-preview, .timeline-item');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (elementPosition < screenPosition) {
                element.style.opacity = 1;
                element.style.transform = 'translateY(0)';
                element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            }
        });
    };
    
    // Initialiser les éléments animés
    const animatedElements = document.querySelectorAll('.skill-category, .project-card, .about-preview, .timeline-item');
    animatedElements.forEach(element => {
        element.style.opacity = 0;
        element.style.transform = 'translateY(20px)';
    });
    
    // Écouter l'événement de défilement
    window.addEventListener('scroll', animateOnScroll);
    // Déclencher une fois au chargement
    setTimeout(animateOnScroll, 100);
    
    /**
     * YEAR AUTOMATIQUE DANS LE FOOTER
     * Met à jour automatiquement l'année dans le copyright
     */
    const yearElement = document.querySelector('footer .footer-bottom p');
    if (yearElement) {
        const currentYear = new Date().getFullYear();
        yearElement.innerHTML = yearElement.innerHTML.replace('2023', currentYear);
    }
    
    /**
     * GESTION DES FORMULAIRES
     * Reset des formulaires après soumission réussie
     */
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('status') === 'success') {
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            if (form.method === 'post') {
                form.reset();
            }
        });
    }
});

/**
 * POLYFILL POUR INTERSECTION OBSERVER
 * Pour la compatibilité avec les vieux navigateurs
 */
if (!window.IntersectionObserver) {
    // Fallback simple pour les navigateurs sans support
    document.addEventListener('DOMContentLoaded', function() {
        const skillBars = document.querySelectorAll('.skill-progress');
        skillBars.forEach(bar => {
            const width = bar.getAttribute('data-width');
            setTimeout(() => {
                bar.style.width = width;
                bar.style.transition = 'width 1.5s ease-in-out';
            }, 500);
        });
    });
}
/**
 * RÉDUCTION DU HEADER AU DÉFILEMENT
 */
window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    const scrollPosition = window.scrollY;
    
    if (scrollPosition > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});