-- Base de dades concerts
CREATE DATABASE IF NOT EXISTS concerts_db;
USE concerts_db;

-- Taula concerts
DROP TABLE IF EXISTS concerts;
CREATE TABLE concerts (
    id_concert INT AUTO_INCREMENT PRIMARY KEY,
    grup VARCHAR(100) NOT NULL,
    ciutat VARCHAR(100) NOT NULL,
    sala VARCHAR(100) NOT NULL,
    data DATE NOT NULL,
    hora TIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dades d'exemple
INSERT INTO concerts (grup, ciutat, sala, data, hora) VALUES
('Coldplay', 'Barcelona', 'Palau Sant Jordi', '2026-03-15', '21:00:00'),
('U2', 'Madrid', 'WiZink Center', '2026-04-20', '20:30:00'),
('Muse', 'Valencia', 'Ciudad de las Artes', '2026-05-10', '21:30:00'),
('The Killers', 'Barcelona', 'Razzmatazz', '2026-03-25', '22:00:00'),
('Arctic Monkeys', 'Bilbao', 'BEC', '2026-06-01', '20:00:00'),
('Imagine Dragons', 'Sevilla', 'Estadio Olímpico', '2026-07-15', '21:00:00');
