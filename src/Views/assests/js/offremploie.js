// Fonction de recherche
const searchInput = document.getElementById('searchInput');
const categoryFilter = document.getElementById('categoryFilter');
const tagFilter = document.getElementById('tagFilter');
const jobsList = document.getElementById('jobsList');

// Fonction de filtrage des offres
function filterJobs() {
    const searchTerm = searchInput.value.toLowerCase();
    const categoryValue = categoryFilter.value.toLowerCase();
    const tagValue = tagFilter.value.toLowerCase();

    // Ici, vous pouvez ajouter votre logique de filtrage
    // pour l'instant, on simule juste un console.log
    console.log('Recherche :', searchTerm);
    console.log('Catégorie :', categoryValue);
    console.log('Tag :', tagValue);
}

// Event listeners
searchInput.addEventListener('input', filterJobs);
categoryFilter.addEventListener('change', filterJobs);
tagFilter.addEventListener('change', filterJobs);

// Fonction d'archivage
function archiveJob(jobId) {
    // Ici, vous pouvez ajouter votre logique d'archivage
    console.log('Archivage de l\'offre :', jobId);
}

// Ajout des event listeners pour les boutons d'archivage
document.querySelectorAll('.archive-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const jobCard = this.closest('.job-card');
        // Vous pouvez ajouter ici l'ID de l'offre depuis vos données
        archiveJob('job_id');
    });
});