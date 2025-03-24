SET NAMES utf8;

DROP DATABASE IF EXISTS blog;
CREATE DATABASE blog;
USE blog;

CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATETIME NOT NULL,
    titre VARCHAR(100) NOT NULL,
    contenu TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE commentaires (
    id INT AUTO_INCREMENT PRIMARY KEY,
    article_id INT NOT NULL,
    date DATETIME NOT NULL,
    auteur VARCHAR(100) NOT NULL,
    contenu TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (article_id) REFERENCES articles(id)
);

-- Insérer 10 articles
INSERT INTO articles (date, titre, contenu) VALUES
('2024-03-01 10:00:00', 'Article 1', 'Contenu de l\'article 1'),
('2024-03-02 11:00:00', 'Article 2', 'Contenu de l\'article 2'),
('2024-03-03 12:00:00', 'Article 3', 'Contenu de l\'article 3'),
('2024-03-04 13:00:00', 'Article 4', 'Contenu de l\'article 4'),
('2024-03-05 14:00:00', 'Article 5', 'Contenu de l\'article 5'),
('2024-03-06 15:00:00', 'Article 6', 'Contenu de l\'article 6'),
('2024-03-07 16:00:00', 'Article 7', 'Contenu de l\'article 7'),
('2024-03-08 17:00:00', 'Article 8', 'Contenu de l\'article 8'),
('2024-03-09 18:00:00', 'Article 9', 'Contenu de l\'article 9'),
('2024-03-10 19:00:00', 'Article 10', 'Contenu de l\'article 10');

-- Insérer 30 commentaires répartis sur les articles
INSERT INTO commentaires (article_id, date, auteur, contenu) VALUES
(1, '2024-03-11 10:00:00', 'Auteur 1', 'Commentaire sur article 1'),
(1, '2024-03-11 11:00:00', 'Auteur 2', 'Autre commentaire sur article 1'),
(2, '2024-03-12 12:00:00', 'Auteur 3', 'Commentaire sur article 2'),
(2, '2024-03-12 13:00:00', 'Auteur 4', 'Autre commentaire sur article 2'),
(3, '2024-03-13 14:00:00', 'Auteur 5', 'Commentaire sur article 3'),
(3, '2024-03-13 15:00:00', 'Auteur 6', 'Autre commentaire sur article 3'),
(4, '2024-03-14 16:00:00', 'Auteur 7', 'Commentaire sur article 4'),
(4, '2024-03-14 17:00:00', 'Auteur 8', 'Autre commentaire sur article 4'),
(5, '2024-03-15 18:00:00', 'Auteur 9', 'Commentaire sur article 5'),
(5, '2024-03-15 19:00:00', 'Auteur 10', 'Autre commentaire sur article 5'),
(6, '2024-03-16 20:00:00', 'Auteur 11', 'Commentaire sur article 6'),
(6, '2024-03-16 21:00:00', 'Auteur 12', 'Autre commentaire sur article 6'),
(7, '2024-03-17 22:00:00', 'Auteur 13', 'Commentaire sur article 7'),
(7, '2024-03-17 23:00:00', 'Auteur 14', 'Autre commentaire sur article 7'),
(8, '2024-03-18 08:00:00', 'Auteur 15', 'Commentaire sur article 8'),
(8, '2024-03-18 09:00:00', 'Auteur 16', 'Autre commentaire sur article 8'),
(9, '2024-03-19 10:00:00', 'Auteur 17', 'Commentaire sur article 9'),
(9, '2024-03-19 11:00:00', 'Auteur 18', 'Autre commentaire sur article 9'),
(10, '2024-03-20 12:00:00', 'Auteur 19', 'Commentaire sur article 10'),
(10, '2024-03-20 13:00:00', 'Auteur 20', 'Autre commentaire sur article 10'),
(1, '2024-03-21 14:00:00', 'Auteur 21', 'Nouveau commentaire sur article 1'),
(2, '2024-03-21 15:00:00', 'Auteur 22', 'Nouveau commentaire sur article 2'),
(3, '2024-03-21 16:00:00', 'Auteur 23', 'Nouveau commentaire sur article 3'),
(4, '2024-03-21 17:00:00', 'Auteur 24', 'Nouveau commentaire sur article 4'),
(5, '2024-03-21 18:00:00', 'Auteur 25', 'Nouveau commentaire sur article 5'),
(6, '2024-03-21 19:00:00', 'Auteur 26', 'Nouveau commentaire sur article 6'),
(7, '2024-03-21 20:00:00', 'Auteur 27', 'Nouveau commentaire sur article 7'),
(8, '2024-03-21 21:00:00', 'Auteur 28', 'Nouveau commentaire sur article 8'),
(9, '2024-03-21 22:00:00', 'Auteur 29', 'Nouveau commentaire sur article 9'),
(10, '2024-03-21 23:00:00', 'Auteur 30', 'Nouveau commentaire sur article 10');


