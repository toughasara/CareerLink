<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Offres d'Emploi - CareerLink</title>
    <link rel="stylesheet" href="../assests/css/recruteur/menurec.css">
    <link rel="stylesheet" href="../assests/css/recruteur/ajouteoffre.css">
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
                    <button class="menu-btn active" id="btn-ajouter-offre" onclick="window.location.href='ajoutoffre.php'">
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

        <!-- Sections de Contenu -->
        <div id="section-contenu">
            <!-- Section Ajouter Offre -->
            <div id="section-ajouter-offre" class="form-section">
                <h2>Nouvelle Offre d'Emploi</h2>
                <form id="formulaire-offre">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Titre du Poste</label>
                            <input type="text" class="form-control" id="titre-poste" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Lieu de Travail</label>
                            <input type="text" class="form-control" id="lieu-travail" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description du Poste</label>
                            <textarea class="form-control" id="description-poste" rows="4" required></textarea>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label">Salaire</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="salaire" min="0" step="100">
                                <span class="input-group-text">€ / an</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label">Type de Contrat</label>
                            <select class="form-select" id="type-contrat" required>
                                <option value="">Sélectionner</option>
                                <option value="CDI">CDI</option>
                                <option value="CDD">CDD</option>
                                <option value="Stage">Stage</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <label class="form-label">Mode de Travail</label>
                            <select class="form-select" id="mode-travail" required>
                                <option value="">Sélectionner</option>
                                <option value="Presentiel">Présentiel</option>
                                <option value="Teletravail">Télétravail</option>
                                <option value="Hybride">Hybride</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Date de Publication</label>
                            <input type="date" class="form-control" id="date-publication" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Catégorie</label>
                            <select class="form-select" id="categorie" required>
                                <option value="">Sélectionner</option>
                                <option value="Technologie">Technologie</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Finance">Finance</option>
                                <option value="RH">Ressources Humaines</option>
                                <option value="Vente">Vente</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Tags</label>
                            <div>
                                <div class="form-check form-check-inline tag-checkbox">
                                    <input class="form-check-input" type="checkbox" id="tag-php" value="PHP">
                                    <label class="form-check-label" for="tag-php">PHP</label>
                                </div>
                                <div class="form-check form-check-inline tag-checkbox">
                                    <input class="form-check-input" type="checkbox" id="tag-javascript" value="JavaScript">
                                    <label class="form-check-label" for="tag-javascript">JavaScript</label>
                                </div>
                                <div class="form-check form-check-inline tag-checkbox">
                                    <input class="form-check-input" type="checkbox" id="tag-marketing" value="Marketing Digital">
                                    <label class="form-check-label" for="tag-marketing">Marketing Digital</label>
                                </div>
                                <div class="form-check form-check-inline tag-checkbox">
                                    <input class="form-check-input" type="checkbox" id="tag-react" value="React">
                                    <label class="form-check-label" for="tag-react">React</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-plus-circle me-2"></i>
                                Publier l'Offre
                            </button>
                        </div>
                    </div>
                </form>
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
                    // Réinitialiser tous les boutons
                    menuButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Activer le bouton cliqué
                    this.classList.add('active');
                });
            });

            // Gestion du formulaire d'ajout d'offre
            const formulaireOffre = document.getElementById('formulaire-offre');
            
            formulaireOffre.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Récupérer les valeurs du formulaire
                const donneesOffre = {
                    titre: document.getElementById('titre-poste').value,
                    lieu: document.getElementById('lieu-travail').value,
                    description: document.getElementById('description-poste').value,
                    salaire: document.getElementById('salaire').value,
                    typeContrat: document.getElementById('type-contrat').value,
                    modeTravail: document.getElementById('mode-travail').value,
                    datePublication: document.getElementById('date-publication').value,
                    categorie: document.getElementById('categorie').value,
                    tags: Array.from(document.querySelectorAll('input[type="checkbox"]:checked'))
                        .map(checkbox => checkbox.value)
                };

                console.log('Données de l\'offre :', donneesOffre);
                
                // Vous pouvez ajouter ici la logique d'envoi des données
                alert('Offre d\'emploi enregistrée !');
                
                // Réinitialiser le formulaire
                formulaireOffre.reset();
            });
        });
    </script>
</body>
</html>