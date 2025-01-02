// Validation du formulaire de connexion
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.querySelector('input[type="email"]').value;
    const password = this.querySelector('input[type="password"]').value;

    // Exemple de logique de connexion (remplacez avec votre backend)
    if (email && password) {
        alert('Connexion réussie !');
    } else {
        alert('Veuillez remplir tous les champs.');
    }
});