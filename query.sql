CREATE DATABASE CareerLink;
USE CareerLink;

CREATE TABLE Role (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre ENUM('Administrateur', 'Recruteur', 'Candidat')
);

CREATE TABLE Utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50),
    password VARCHAR(255),
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES Role(id)
);

CREATE TABLE Recruteur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT,
    nom_entreprise VARCHAR(50),
    pay VARCHAR(50),
    ville VARCHAR(50),
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(id)
);

CREATE TABLE Candidat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    adress VARCHAR(100),
    linkdin VARCHAR(100),
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(id)
);

CREATE TABLE Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nom VARCHAR(50),
    description TEXT
);

CREATE TABLE Emploi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100),
    description TEXT,
    typecontrat ENUM ('CDI', 'CDD', 'Stage'),
    salaire INT,
    lieu VARCHAR(100),
    modetravail ENUM ('Presentiel', 'Teletravail', 'Hybride', 'Freelance'),
    datepublication DATETIME,
    recruteur_id INT,
    categorie_id INT,
    FOREIGN KEY (recruteur_id) REFERENCES Recruteur(id),
    FOREIGN KEY (categorie_id) REFERENCES Categorie(id)
);

CREATE TABLE Tag (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    description TEXT
);

CREATE TABLE EmploiTag (
    emploi_id INT,
    tag_id INT,
    PRIMARY KEY (emploi_id, tag_id),
    FOREIGN KEY (emploi_id) REFERENCES Emploi(id),
    FOREIGN KEY (tag_id) REFERENCES Tag(id)
);

CREATE TABLE Postulation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    candidat_id INT,
    emploi_id INT,
    date_postulation DATETIME,
    FOREIGN KEY (candidat_id) REFERENCES Candidat(id),
    FOREIGN KEY (emploi_id) REFERENCES Emploi(id)
);
