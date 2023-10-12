-- Criar o banco de dados
CREATE DATABASE IF NOT EXISTS desafio_php_clientes;
USE desafio_php_clientes;

-- Criar a tabela clientes
CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(255) UNIQUE,
    endereco VARCHAR(255)
);

-- Inserir 10 clientes fakes
INSERT INTO clientes (nome, telefone, email, endereco) VALUES
('Alice Souza', '111-1111', 'alice@email.com', 'Rua A, 1'),
('Bruno Martins', '222-2222', 'bruno@email.com', 'Rua B, 2'),
('Carla Silva', '333-3333', 'carla@email.com', 'Rua C, 3'),
('Diego Oliveira', '444-4444', 'diego@email.com', 'Rua D, 4'),
('Elena Castro', '555-5555', 'elena@email.com', 'Rua E, 5'),
('Felipe Costa', '666-6666', 'felipe@email.com', 'Rua F, 6'),
('Gisele Dias', '777-7777', 'gisele@email.com', 'Rua G, 7'),
('Henrique Santos', '888-8888', 'henrique@email.com', 'Rua H, 8'),
('Igor Lima', '999-9999', 'igor@email.com', 'Rua I, 9'),
('Juliana Moraes', '000-0000', 'juliana@email.com', 'Rua J, 10');
