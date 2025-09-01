// Validation côté client pour le formulaire de contact
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            let isValid = true;
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const subjectInput = document.getElementById('subject');
            const messageInput = document.getElementById('message');
            
            // Réinitialiser les messages d'erreur
            clearErrors();
            
            // Validation du nom
            if (nameInput.value.trim() === '') {
                showError(nameInput, 'Le nom est requis');
                isValid = false;
            }
            
            // Validation de l'email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value.trim())) {
                showError(emailInput, 'Veuillez entrer une adresse email valide');
                isValid = false;
            }
            
            // Validation du sujet
            if (subjectInput.value.trim() === '') {
                showError(subjectInput, 'Le sujet est requis');
                isValid = false;
            }
            
            // Validation du message
            if (messageInput.value.trim() === '') {
                showError(messageInput, 'Le message est requis');
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });
        
        function showError(input, message) {
            const formGroup = input.parentElement;
            const errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            errorDiv.style.color = 'red';
            errorDiv.style.fontSize = '0.875rem';
            errorDiv.style.marginTop = '0.25rem';
            errorDiv.textContent = message;
            formGroup.appendChild(errorDiv);
            
            input.style.borderColor = 'red';
        }
        
        function clearErrors() {
            const errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(msg => msg.remove());
            
            const inputs = document.querySelectorAll('.form-group input, .form-group textarea');
            inputs.forEach(input => {
                input.style.borderColor = '#ddd';
            });
        }
    }
});