CREATE DATABASE transista_app;

USE transista_app;

-- Tabela de Clientes
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Tabela de Agendamentos
CREATE TABLE agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    data_agendamento DATE,
    hora_agendamento TIME,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
);

-- Tabela de Estoque
CREATE TABLE estoque (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_nome VARCHAR(100),
    quantidade INT
);

-- Tabela de Vendas e Atendimentos
CREATE TABLE vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    data_venda DATE,
    produto_nome VARCHAR(100),
    quantidade INT,
    total DECIMAL(10, 2),
    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
);

-- Tabela de Questionários de Satisfação
CREATE TABLE questionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    pergunta1 TEXT,
    pergunta2 TEXT,
    pergunta3 TEXT,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
);
