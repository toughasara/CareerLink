// Sélectionner tous les liens de navigation
const navLinks = document.querySelectorAll('.nav-link');

// Ajouter un écouteur de clic pour chaque lien
navLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Retirer la classe active de tous les liens
        navLinks.forEach(l => l.classList.remove('active'));
        
        // Ajouter la classe active au lien cliqué
        this.classList.add('active');
    });
});