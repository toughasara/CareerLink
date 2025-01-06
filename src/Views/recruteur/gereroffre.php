<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Offres d'Emploi - CareerLink</title>
    <link rel="stylesheet" href="../assests/css/recruteur/menurec.css">
    <link rel="stylesheet" href="../assests/css/recruteur/gererofrre.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
    <!-- Dashboard Header -->
    <div class="dashboard-header text-center">
        <div class="container">
            <h1>Gestion des Offres d'Emploi</h1>
            <p>Gérez et publiez vos offres avec facilité</p>
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
                    <button class="menu-btn active" id="btn-gerer-offres" onclick="window.location.href='gereroffre.php'">
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

        <!-- Section Liste des Offres -->
        <div id="section-gerer-offres">
            <!-- Barre de recherche et filtres -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Rechercher une offre..." id="recherche-offre">
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="form-select" id="filtre-categorie">
                        <option value="">Toutes les catégories</option>
                        <option value="Technologie">Technologie</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Finance">Finance</option>
                        <option value="RH">Ressources Humaines</option>
                        <option value="Vente">Vente</option>
                    </select>
                </div>
            </div>

            <!-- Liste des offres -->
            <div id="liste-offres">
                <!-- Exemple d'une offre -->
                <div class="job-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h3 class="h4 mb-1">Développeur Full Stack</h3>
                            <p class="text-muted mb-2">Paris - CDI</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span class="tag">PHP</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">React</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="publication-date">
                            <i class="bi bi-calendar-event me-2"></i>Publié le 15/01/2024
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-outline-primary btn-sm" onclick="modifierOffre(1)">
                                <i class="bi bi-pencil me-1"></i>Modifier
                            </button>
                            <button class="btn btn-outline-danger btn-sm" onclick="supprimerOffre(1)">
                                <i class="bi bi-trash me-1"></i>Supprimer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Autre exemple d'offre -->
                <div class="job-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h3 class="h4 mb-1">Chef de Projet Marketing</h3>
                            <p class="text-muted mb-2">Lyon - CDD</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span class="tag">Marketing Digital</span>
                        <span class="tag">SEO</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="publication-date">
                            <i class="bi bi-calendar-event me-2"></i>Publié le 10/01/2024
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-outline-primary btn-sm" onclick="modifierOffre(2)">
                                <i class="bi bi-pencil me-1"></i>Modifier
                            </button>
                            <button class="btn btn-outline-danger btn-sm" onclick="supprimerOffre(2)">
                                <i class="bi bi-trash me-1"></i>Supprimer
                            </button>
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
            const rechercheInput = document.getElementById('recherche-offre');
            rechercheInput.addEventListener('input', function() {
                // Implémenter la logique de recherche
                console.log('Recherche:', this.value);
            });

            // Gestion des filtres
            const filtreCategorie = document.getElementById('filtre-categorie');
            filtreCategorie.addEventListener('change', appliquerFiltres);
        });

        function appliquerFiltres() {
            const categorie = document.getElementById('filtre-categorie').value;
            console.log('Filtre appliqué:', { categorie });
            // Implémenter la logique de filtrage
        }

        function modifierOffre(id) {
            console.log('Modification de l\'offre:', id);
            // Implémenter la logique de modification
        }

        function supprimerOffre(id) {
            if (confirm('Êtes-vous sûr de vouloir supprimer cette offre ?')) {
                console.log('Suppression de l\'offre:', id);
                // Implémenter la logique de suppression
            }
        }
    </script>
</body>
</html>