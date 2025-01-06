<<<<<<< HEAD
=======
// Toggle entre les types d'utilisateurs
document.querySelectorAll('.user-type-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.user-type-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        
        const type = this.dataset.type;
        if(type === 'candidate') {
            document.getElementById('candidateFields').style.display = 'block';
            document.getElementById('recruiterFields').style.display = 'none';
        } else {
            document.getElementById('candidateFields').style.display = 'none';
            document.getElementById('recruiterFields').style.display = 'block';
        }
    });
});

>>>>>>> 8f176fbb454097af1f873e445c0801296336e66b
// Gestion du drag & drop pour le CV
const uploadZone = document.querySelector('.upload-resume');
const fileInput = uploadZone.querySelector('input[type="file"]');

uploadZone.addEventListener('click', () => fileInput.click());

uploadZone.addEventListener('dragover', (e) => {
    e.preventDefault();
    uploadZone.style.borderColor = '#3498DB';
});

uploadZone.addEventListener('dragleave', () => {
    uploadZone.style.borderColor = '#3498DB';
});

uploadZone.addEventListener('drop', (e) => {
    e.preventDefault();
    const files = e.dataTransfer.files;
    if(files.length) {
        fileInput.files = files;
        uploadZone.querySelector('p').textContent = `Fichier sélectionné : ${files[0].name}`;
    }
});

// Validation du formulaire
document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Ajoutez ici votre logique de validation et d'envoi du formulaire
<<<<<<< HEAD
});

document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire
    window.location.href = 'login.php'; // Redirige vers inscription.php
=======
>>>>>>> 8f176fbb454097af1f873e445c0801296336e66b
});