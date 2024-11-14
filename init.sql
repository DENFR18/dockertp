  GNU nano 7.2                                                               init.sql                                                                        -- Création de la table
CREATE TABLE ta_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    colonne1 VARCHAR(255) NOT NULL,
    colonne2 VARCHAR(255) NOT NULL
);

-- Insertion de données initiales
INSERT INTO ta_table (colonne1, colonne2) VALUES ('valeur1', 'valeur2');
INSERT INTO ta_table (colonne1, colonne2) VALUES ('valeur3', 'valeur4');
INSERT INTO ta_table (colonne1, colonne2) VALUES ('valeur5', 'valeur6');





















