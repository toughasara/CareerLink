// Fonction pour ajouter une catégorie
function addCategory(categoryData) {
    console.log('Ajout de la catégorie :', categoryData);
}

// Fonction pour modifier une catégorie
function editCategory(categoryId) {
    console.log('Modification de la catégorie :', categoryId);
}

// Fonction pour supprimer une catégorie
function deleteCategory(categoryId) {
    if(confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')) {
        console.log('Suppression de la catégorie :', categoryId);
    }
}

// Event listeners
document.addEventListener('DOMContentLoaded', function() {
    // Boutons de modification
    document.querySelectorAll('.edit-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const row = this.closest('tr');
            const categoryName = row.querySelector('td').textContent;
            editCategory(categoryName);
        });
    });

    // Boutons de suppression
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const row = this.closest('tr');
            const categoryName = row.querySelector('td').textContent;
            deleteCategory(categoryName);
        });
    });
});