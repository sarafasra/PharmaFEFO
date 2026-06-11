CREATE DATABASE pharmafefo;
USE pharmafefo;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255),
    role VARCHAR(50)
);

CREATE TABLE medicaments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    code VARCHAR(50),
    description TEXT
);

CREATE TABLE lots (
    id INT AUTO_INCREMENT PRIMARY KEY,
    medicament_id INT,
    numero_lot VARCHAR(50),
    quantite INT,
    date_peremption DATE,
    statut VARCHAR(50),
    FOREIGN KEY (medicament_id) REFERENCES medicaments(id)
);

CREATE TABLE alertes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lot_id INT,
    niveau VARCHAR(50),
    message TEXT,
    date_creation DATE,
    FOREIGN KEY (lot_id) REFERENCES lots(id)
);
-- USERS
INSERT INTO users (name, email, password, role) VALUES
('Admin', 'admin@pharma.com', '1234', 'ADMIN'),
('Sara', 'sara@pharma.com', '1234', 'PREPARATEUR'),
('laila', 'laila@pharma.com', '1234', 'PHARMACIEN');

-- MEDICAMENTS
INSERT INTO medicaments (nom, code, description) VALUES
('Paracetamol', 'PAR001', 'Antidouleur'),
('Amoxicilline', 'AMX001', 'Antibiotique'),
('Doliprane', 'DOL001', 'Traitement de la douleur');

-- LOTS
INSERT INTO lots (medicament_id, numero_lot, quantite, date_peremption, statut) VALUES
(1, 'LOT001', 100, '2026-12-15', 'OK'),
(1, 'LOT002', 50, '2026-08-01', 'WARNING'),
(2, 'LOT003', 80, '2026-07-01', 'CRITICAL'),
(3, 'LOT004', 60, '2025-05-01', 'EXPIRED');

-- ALERTES
INSERT INTO alertes (lot_id, niveau, message, date_creation) VALUES
(2, 'WARNING', 'Le lot LOT002 expire dans moins de 90 jours', '2026-06-10'),
(3, 'CRITICAL', 'Le lot LOT003 expire dans moins de 30 jours', '2026-06-10'),
(4, 'CRITICAL', 'Le lot LOT004 est périmé', '2026-06-10');