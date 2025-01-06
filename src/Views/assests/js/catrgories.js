// Sidebar toggle for mobile
document.getElementById('sidebar-toggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('show');
});

// Close sidebar when clicking outside on mobile
document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    
    if (window.innerWidth <= 992 && sidebar.classList.contains('show') && 
        !sidebar.contains(event.target) && 
        event.target !== sidebarToggle && 
        !sidebarToggle.contains(event.target)) {
        sidebar.classList.remove('show');
    }
});

// Existing category management functions
function addCategory(categoryData) {
    console.log('Ajout de la catégorie :', categoryData);
}

function editCategory(categoryId) {
    console.log('Modification de la catégorie :', categoryId);
}

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