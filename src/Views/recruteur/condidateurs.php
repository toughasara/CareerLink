<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Candidatures - CareerLink</title>
    <link rel="stylesheet" href="../assests/css/recruteur/menurec.css">
    <link rel="stylesheet" href="../assests/css/recruteur/condidataurs.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
    <!-- Dashboard Header -->
    <div class="dashboard-header text-center">
        <div class="container">
            <h1>Gestion des Candidatures</h1>
            <p>Consultez et gérez les candidatures reçues</p>
        </div>
    </div>

    <!-- Menu Buttons -->
    <div class="container">
        <div class="menu-buttons">
            <div class="row g-3">
                <div class="col-12 col-md-3">
                    <button class="menu-btn" id="btn-emplois" onclick="window.location.href='index.php'">
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
                    <button class="menu-btn active" id="btn-candidatures" onclick="window.location.href='condidateurs.php'">
                        <i class="bi bi-people"></i>
                        Candidatures
                    </button>
                </div>
            </div>
        </div>

        <!-- Section Candidatures -->
        <div id="section-candidatures">
            <!-- Filtres et recherche -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Rechercher un candidat..." id="recherche-candidat">
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="form-select" id="filtre-offre">
                        <option value="">Toutes les offres</option>
                        <option value="1">Développeur Full Stack</option>
                        <option value="2">Chef de Projet Marketing</option>
                        <option value="3">Ingénieur DevOps</option>
                    </select>
                </div>
            </div>

            <!-- Liste des candidatures par offre -->
            <div class="offre-section mb-5">
                <div class="job-title">
                    <h3 class="mb-0">Développeur Full Stack</h3>
                    <small>3 candidatures reçues</small>
                </div>

                <!-- Candidat 1 -->
                <div class="candidate-card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Thomas Dubois</h4>
                            <div class="mb-3">
                                <span class="candidate-info">
                                    <i class="bi bi-envelope me-2"></i>thomas.dubois@email.com
                                </span>
                            </div>
                            <div class="mb-3">
                                <span class="candidate-info">
                                    <i class="bi bi-geo-alt me-2"></i>Paris, France
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <div class="mb-3">
                                <span class="domain-badge">Développement Web</span>
                            </div>
                            <div class="candidate-info">
                                <i class="bi bi-linkedin me-2"></i>thomas-dubois
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Candidat 2 -->
                <div class="candidate-card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Marie Laurent</h4>
                            <div class="mb-3">
                                <span class="candidate-info">
                                    <i class="bi bi-envelope me-2"></i>marie.laurent@email.com
                                </span>
                            </div>
                            <div class="mb-3">
                                <span class="candidate-info">
                                    <i class="bi bi-geo-alt me-2"></i>Lyon, France
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <div class="mb-3">
                                <span class="domain-badge">Développement Full Stack</span>
                            </div>
                            <div class="candidate-info">
                                <i class="bi bi-linkedin me-2"></i>marie-laurent
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Autre offre -->
            <div class="offre-section mb-5">
                <div class="job-title">
                    <h3 class="mb-0">Chef de Projet Marketing</h3>
                    <small>2 candidatures reçues</small>
                </div>

                <!-- Candidat 1 -->
                <div class="candidate-card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Sophie Martin</h4>
                            <div class="mb-3">
                                <span class="candidate-info">
                                    <i class="bi bi-envelope me-2"></i>sophie.martin@email.com
                                </span>
                            </div>
                            <div class="mb-3">
                                <span class="candidate-info">
                                    <i class="bi bi-geo-alt me-2"></i>Bordeaux, France
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <div class="mb-3">
                                <span class="domain-badge">Marketing Digital</span>
                            </div>
                            <div class="candidate-info">
                                <i class="bi bi-linkedin me-2"></i>sophie-martin
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gestion des boutons de menu
            const menuButtons = document.querySelectorAll('.menu-btn');
            
            menuButtons.forEach(button => {
                button.addEventListener('click', function() {
                    menuButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Gestion de la recherche
            const rechercheInput = document.getElementById('recherche-candidat');
            rechercheInput.addEventListener('input', function() {
                // Implémenter la logique de recherche
                console.log('Recherche:', this.value);
            });

            // Gestion du filtre par offre
            const filtreOffre = document.getElementById('filtre-offre');
            filtreOffre.addEventListener('change', function() {
                // Implémenter la logique de filtrage par offre
                console.log('Filtre offre:', this.value);
            });
        });
    </script>
</body>
</html>