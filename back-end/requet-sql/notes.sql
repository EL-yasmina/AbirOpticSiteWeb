-- Création de la table Client
CREATE TABLE Client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    sexe VARCHAR(10),
    email VARCHAR(100),
    telephone VARCHAR(20),
    adresse VARCHAR(100),
    ville VARCHAR(50),
    password VARCHAR(255)
);

-- Création de la table Produit
CREATE TABLE Produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    quantite INT,
    image LONGBLOB,
    solde DECIMAL(10, 2),
    prix DECIMAL(10, 2)
);

-- Création de la table Commande
CREATE TABLE Commande (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    id_produit INT,
    id_client INT,
    quantite INT,
    status INT,
    FOREIGN KEY (id_produit) REFERENCES Produit(id),
    FOREIGN KEY (id_client) REFERENCES Client(id)
);

-- Exemple d'insertion de données dans les tables
INSERT INTO Client (nom, prenom, sexe, email, telephone, adresse, ville, password)
VALUES ('Doe', 'John', 'Homme', 'johndoe@example.com', '123456789', '123 Rue de la République', 'Paris', 'motdepasse123');

INSERT INTO Produit (nom, quantite, image, solde, prix)
VALUES ('Produit A', 100, 'binaire_de_l_image', 0.0, 19.99);

INSERT INTO Commande (date, id_produit, id_client, quantite, status)
VALUES ('2023-10-09', 1, 1, 2, 1);
-- Insertion de données dans la table Client
INSERT INTO Client (nom, prenom, sexe, email, telephone, adresse, ville, password)
VALUES ('Smith', 'Alice', 'Femme', 'alicesmith@example.com', '987654321', '456 Elm Street', 'New York', 'motdepasse456');

-- Insertion de données dans la table Produit
INSERT INTO Produit (nom, quantite, image, solde, prix)
VALUES ('Produit B', 75, 'binaire_de_l_image_2', 0.0, 29.99);

-- Insertion de données dans la table Commande
INSERT INTO Commande (date, id_produit, id_client, quantite, status)
VALUES ('2023-10-10', 2, 2, 3, 2);

-- Ajout d'un autre client
INSERT INTO Client (nom, prenom, sexe, email, telephone, adresse, ville, password)
VALUES ('Johnson', 'Bob', 'Homme', 'bobjohnson@example.com', '555555555', '789 Oak Avenue', 'Los Angeles', 'motdepasse789');

