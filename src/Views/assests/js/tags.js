// Fonction pour ajouter un tag
function addTag(tagData) {
    console.log('Ajout du tag :', tagData);
}

// Fonction pour modifier un tag
function editTag(tagId) {
    console.log('Modification du tag :', tagId);
}

// Fonction pour supprimer un tag
function deleteTag(tagId) {
    if(confirm('Êtes-vous sûr de vouloir supprimer ce tag ?')) {
        console.log('Suppression du tag :', tagId);
    }
}

// Event listeners
document.addEventListener('DOMContentLoaded', function() {
    // Boutons de modification
    document.querySelectorAll('.edit-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const row = this.closest('tr');
            const tagName = row.querySelector('td').textContent;
            editTag(tagName);
        });
    });

    // Boutons de suppression
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const row = this.closest('tr');
            const tagName = row.querySelector('td').textContent;
            deleteTag(tagName);
        });
    });
});