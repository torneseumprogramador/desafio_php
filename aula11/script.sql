CREATE DATABASE IF NOT EXISTS estoque;

use estoque;

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    descricao VARCHAR(1000),
    preco FLOAT NOT NULL,
    quantidade INT NOT NULL
);

-- ==== Comando para aplicar o script no database ========
-- mysql -u root -p'root' < script.sql

