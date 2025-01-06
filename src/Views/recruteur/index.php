<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Emplois - CareerLink</title>
    <link rel="stylesheet" href="../assests/css/recruteur/menurec.css">
    <link rel="stylesheet" href="../assests/css/recruteur/emprc.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
    <!-- Dashboard Header -->
    <div class="dashboard-header text-center">
        <div class="container">
            <h1>Liste des Emplois Disponibles</h1>
            <p>Découvrez toutes les opportunités d'emploi</p>
        </div>
    </div>

    <!-- Menu Buttons -->
    <div class="container">
        <div class="menu-buttons">
            <div class="row g-3">
                <div class="col-12 col-md-3">
                    <button class="menu-btn active" id="btn-emplois" onclick="window.location.href='index.php'">
                        <i class="bi bi-briefcase"></i>
                        Emplois
                    </button>
                </div>
                <div class="col-12 col-md-3">
                    <button class="menu-btn" id="btn-ajouter-offre" onclick="window.location.href='ajoutoffre.php'">
                        <i class="bi bi-plus-circle"></i>
                        Ajouter Offre
                    </button>
                </div>
                <div class="col-12 col-md-3">
                    <button class="menu-btn" id="btn-gerer-offres" onclick="window.location.href='gereroffre.php'">
                        <i class="bi bi-list-task"></i>
                        Gérer Offres
                    </button>
                </div>
                <div class="col-12 col-md-3">
                    <button class="menu-btn" id="btn-candidatures" onclick="window.location.href='condidateurs.php'">
                        <i class="bi bi-people"></i>
                        Candidatures
                    </button>
                </div>
            </div>
        </div>

        <!-- Filtres et recherche -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Rechercher un emploi..." id="recherche-emploi">
                </div>
            </div>
            <div class="col-md-4">
                <select class="form-select" id="filtre-categorie">
                    <option value="">Toutes les catégories</option>
                    <option value="Technologie">Technologie</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Finance">Finance</option>
                    <option value="RH">Ressources Humaines</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" id="filtre-type">
                    <option value="">Tous les types de contrat</option>
                    <option value="CDI">CDI</option>
                    <option value="CDD">CDD</option>
                    <option value="Stage">Stage</option>
                    <option value="Freelance">Freelance</option>
                </select>
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
            </div>
        </div>
    </div>

    <!-- Modal Détail Emploi -->
    <div class="modal fade" id="modalDetailEmploi" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Détail de l'offre</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="modal-contenu">
                    <!-- Le contenu sera injecté dynamiquement -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    