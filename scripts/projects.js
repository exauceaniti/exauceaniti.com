// Scripts spécifiques à la page projets
document.addEventListener('DOMContentLoaded', function() {
    // Animation au défilement pour les cartes de projet
    const projectCards = document.querySelectorAll('.project-card');
    
    if (projectCards.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        projectCards.forEach((card, index) => {
            card.style.opacity = 0;
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            card.style.transitionDelay = `${index * 0.1}s`;
            
            observer.observe(card);
        });
    }
    
    // Filtrage des projets (pour une future implémentation)
    const filterButtons = document.createElement('div');
    filterButtons.innerHTML = `
        <div class="project-filters">
            <button class="filter-btn active" data-filter="all">Tous</button>
            <button class="filter-btn" data-filter="web">Web</button>
            <button class="filter-btn" data-filter="mobile">Mobile</button>
            <button class="filter-btn" data-filter="design">Design</button>
        </div>
    `;
    
    const projectsSection = document.querySelector('.projects-section .container');
    if (projectsSection) {
        projectsSection.insertBefore(filterButtons, projectsSection.querySelector('.projects-grid'));
        
        // Ajouter le CSS pour les filtres
        const style = document.createElement('style');
        style.textContent = `
            .project-filters {
                display: flex;
                justify-content: center;
                gap: 1rem;
                margin-bottom: 2rem;
            }
            
            .filter-btn {
                padding: 0.5rem 1rem;
                background: #ecf0f1;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                transition: background 0.3s;
            }
            
            .filter-btn.active, .filter-btn:hover {
                background: #3498db;
                color: white;
            }
        `;
        document.head.appendChild(style);
    }
});