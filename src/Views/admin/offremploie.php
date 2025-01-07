<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres d'Emploi - CareerLink</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assests/css/admin/dashbord.css">
    <link rel="stylesheet" href="../assests/css/admin/offremploie.css">
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar" class="p-3">
        <h3 class="text-white mb-4 px-2">CareerLink</h3>
        <nav class="nav flex-column">
            <a href="statistique.php" class="nav-link">
                <i class="bi bi-graph-up"></i> Statistiques
            </a>
            <a href="offremploie.php" class="nav-link active">
                <i class="bi bi-briefcase"></i> Offres d'emploi
            </a>
            <a href="Categorie/categories.php" class="nav-link">
                <i class="bi bi-grid"></i> Catégories
            </a>
            <a href="Tag/tags.php" class="nav-link">
                <i class="bi bi-tags"></i> Tags
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div id="content">
        <!-- Header -->
        <div class="header mb-4">
            <h1 class="fw-bold">Offres d'emploi</h1>
            <p>Gérez les offres d'emploi publiées</p>
        </div>

        <!-- Search and Filters -->
        <div class="container">
            <div class="search-card">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text border-0 bg-light">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" id="searchInput" class="form-control border-0 bg-light" placeholder="Rechercher une offre...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select id="categoryFilter" class="form-select bg-light border-0">
                            <option value="">Toutes les catégories</option>
                            <option value="Technologie">Technologie</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Finance">Finance</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select id="tagFilter" class="form-select bg-light border-0">
                            <option value="">Tous les tags</option>
                            <option value="PHP">PHP</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="Marketing Digital">Marketing Digital</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Liste des emplois -->
        <div id="liste-emplois">
            <!-- Emploi 1 -->
            <div class="job-card" onclick="afficherDetail(1)">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h3>Développeur Full Stack</h3>
                        <p class="text-muted mb-2">TechCorp - Paris</p>
                    </div>
                    <span class="company-tag">TechCorp</span>
                </div>
                <div class="mb-3">
                    <span class="publication-date">
                        <i class="bi bi-calendar-event me-2"></i>Publié le 15/01/2024
                    </span>
                    <span class="text-muted">CDI</span>
                </div>
                <div>
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">React</span>
                </div>
                <div class="action-buttons">
                    <button class="archive-button" onclick="event.stopPropagation(); archiveJob('job1')">
                        <i class="bi bi-archive-fill"></i>
                        Archiver
                    </button>
                </div>
            </div>

            <!-- Emploi 2 -->
            <div class="job-card" onclick="afficherDetail(2)">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h3>Chef de Projet Marketing Digital</h3>
                        <p class="text-muted mb-2">MarketPro - Lyon</p>
                    </div>
                    <span class="company-tag">MarketPro</span>
                </div>
                <div class="mb-3">
                    <span class="publication-date">
                        <i class="bi bi-calendar-event me-2"></i>Publié le 10/01/2024
                    </span>
                    <span class="text-muted">CDI</span>
                </div>
                <div>
                    <span class="skill-tag">Marketing Digital</span>
                    <span class="skill-tag">SEO</span>
                    <span class="skill-tag">Analytics</span>
                </div>
                <div class="action-buttons">
                    <button class="archive-button" onclick="event.stopPropagation(); archiveJob('job1')">
                        <i class="bi bi-archive-fill"></i>
                        Archiver
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="../assests/js/dashbord.js"></script>
    <script src="../assests/js/offremploie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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
    </script>
</body>
</html>