// Recherche dynamique
document.getElementById('searchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Ajoutez ici la logique de recherche
});

// Animation navbar au scroll
window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
        document.querySelector('.navbar').classList.add('shadow');
    } else {
        document.querySelector('.navbar').classList.remove('shadow');
    }
});

// Animation des cartes au hover
document.querySelectorAll('.job-card').forEach(card => {
    card.addEventListener('mouseover', function() {
        this.style.transform = 'translateY(-5px)';
    });
    card.addEventListener('mouseout', function() {
        this.style.transform = 'translateY(0)';
    });
});

// Newsletter
document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.querySelector('input[type="email"]').value;
    alert('Merci de votre inscription ! Vous recevrez bientôt nos actualités.');
});