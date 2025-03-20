CREATE DATABASE IF NOT EXISTS meu_banco;
USE meu_banco;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL
);

INSERT INTO users (nome, email) VALUES 
('Vinicius Bariane', 'vinisilvabariane10@gmail.com'),
('João Silva', 'joao.silva@email.com'),
('Maria Oliveira', 'maria.oliveira@email.com');
