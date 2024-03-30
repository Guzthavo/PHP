<?php
// Conexão com o banco de dados
$servername = "servidor";
$username = "usuario";
$password = "ssenha";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para executar consulta SQL e verificar se teve sucesso
function executeQuery($conn, $sql) {
    if ($conn->query($sql) === TRUE) {
        echo "Consulta executada com sucesso: $sql <br>";
    } else {
        echo "Erro ao executar consulta: " . $conn->error;
    }
}

// CORINGA
executeQuery($conn, "SELECT * FROM tb_alunos WHERE nome = 'Evelyn'");
executeQuery($conn, "SELECT * FROM tb_alunos WHERE nome LIKE '%e'");
executeQuery($conn, "SELECT * FROM tb_alunos WHERE nome LIKE '%ne'");
executeQuery($conn, "SELECT * FROM tb_alunos WHERE nome LIKE '%a%'");
executeQuery($conn, "SELECT * FROM tb_alunos WHERE nome LIKE 'C%'");
executeQuery($conn, "SELECT * FROM tb_alunos WHERE nome LIKE '_riel'");
executeQuery($conn, "SELECT * FROM tb_alunos WHERE nome LIKE '_ru_'");
executeQuery($conn, "SELECT * FROM tb_alunos WHERE nome LIKE 'I__'");

// BETWEEN
executeQuery($conn, "SELECT * FROM tb_alunos WHERE idade BETWEEN 18 AND 25");

// OPERADORES LÓGICOS
executeQuery($conn, "SELECT * FROM tb_alunos WHERE interesse = 'Jogos' AND idade > 45");
executeQuery($conn, "SELECT * FROM tb_alunos WHERE interesse = 'Jogos' AND idade > 45 AND estado = '**'");
executeQuery($conn, "SELECT * FROM tb_alunos WHERE interesse = 'Jogos' OR idade > 45");
executeQuery($conn, "SELECT * FROM tb_clientes LEFT JOIN tb_pedidos ON(tb_clientes.id_cliente = tb_pedidos.id_cliente)");
executeQuery($conn, "SELECT * FROM tb_clientes RIGHT JOIN tb_pedidos ON(tb_clientes.id_cliente = tb_pedidos.id_cliente)");

// Inserções de dados
executeQuery($conn, "INSERT INTO tb_clientes(nome, idade) VALUES('Jorge', 29)");
executeQuery($conn, "INSERT INTO tb_pedidos(id_cliente) VALUES(1)");
executeQuery($conn, "INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(1, 2)");
executeQuery($conn, "INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(1, 3)");

// Fecha a conexão
$conn->close();
?>




Comando  básico no  sql
CORINGA 

SELECT * FROM `tb_alunos` WHERE nome = 'Evelyn';

SELECT * FROM `tb_alunos` WHERE nome LIKE '%e';
SELECT * FROM `tb_alunos` WHERE nome LIKE '%ne';
SELECT * FROM `tb_alunos` WHERE nome LIKE '%a%';
SELECT * FROM `tb_alunos` WHERE nome LIKE 'C%';

SELECT * FROM `tb_alunos` WHERE nome LIKE '_riel';
SELECT * FROM `tb_alunos` WHERE nome LIKE '_ru_';

SELECT * FROM `tb_alunos` WHERE nome LIKE 'I__';

BETWEEN

SELECT * FROM `tb_alunos` WHERE idade BETWEEN 18 AND 25;


OPERADORES LOGICOS 


SELECT * FROM `tb_alunos` WHERE interesse = 'Jogos' AND idade > 45;

SELECT * FROM `tb_alunos` WHERE interesse = 'Jogos' AND idade > 45 AND estado = 'RN';

SELECT * FROM `tb_alunos` WHERE interesse = 'Jogos' OR idade > 45;

SELECT * FROM tb_clientes LEFT JOIN tb_pedidos ON(tb_clientes.id_cliente = tb_pedidos.id_cliente);

SELECT * FROM tb_clientes RIGHT JOIN tb_pedidos ON(tb_clientes.id_cliente = tb_pedidos.id_cliente);


INSERT INTO tb_clientes(nome, idade) VALUES('Jorge', 29);	
INSERT INTO tb_pedidos(id_cliente) VALUES(1);	
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(1, 2);
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(1, 3);
INSERT INTO tb_pedidos(id_cliente) VALUES(1);
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(2,3);
INSERT INTO tb_clientes(nome, idade) VALUES('Jamilton', 30);
INSERT INTO tb_pedidos(id_cliente) VALUES(2);
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(3,1);


CREATE TABLE tb_clientes(
	id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade INT (3) NOT NULL
);

CREATE TABLE tb_pedidos(
	id_pedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES tb_clientes(id_cliente),
    data_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tb_pedidos_produtos(
	id_pedido INT NOT NULL,
    id_produto INT NOT NULL,
    FOREIGN KEY(id_pedido) REFERENCES tb_pedidos(id_pedido),
    FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto)
);



CREATE TABLE tb_imagens (
    id_imagem INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INT NOT NULL,
    FOREIGN KEY (id_produto) REFERENCES tb_produtos(id_produto),
    url_imagem VARCHAR(200) NOT NULL
);

INSERT INTO tb_imagens(id_produto, url_imagem) VALUES (1, 'notebook_1.jpg'), (1, 'notebook_2.jpg'),
(1, 'notebook_3.jpg');

INSERT INTO tb_imagens(id_produto, url_imagem) VALUES (2, 'smarttv_1.jpg'), (2, 'smarttv_2.jpg');

INSERT INTO tb_imagens(id_produto, url_imagem) VALUES (3, 'smartphone_1.jpg');


CREATE DATABASE bd_loja_virtual;

CREATE TABLE tb_produtos(
	id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	produto VARCHAR(200) NOT NULL,
	valor FLOAT(8,2) NOT NULL
);

CREATE TABLE tb_descricoes_tecnicas(
	id_descricao_tecnica INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_produto INT NOT NULL,
	descricao_tecnica TEXT NOT NULL,
	FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto)
);


/*
CREATE TABLE tb_cursos (
  id_curso INT(11) NOT NULL,
  imagem_curso VARCHAR(100) NOT NULL,
  nome_curso CHAR(50) NOT NULL,
  resumo TEXT NULL,
  data_cadastro DATETIME NOT NULL,
  ativo BOOLEAN DEFAULT 1,
  investimento FLOAT(8,2) DEFAULT 0,
  carga_horaria INT(5) NULL  
);
*/

TRUNCATE tb_cursos;

INSERT INTO tb_cursos(id_curso, imagem_curso, nome_curso, resumo, data_cadastro, ativo, investimento, carga_horaria) VALUES (1, 'curso_node.jpg', 'Curso Completo do Desenvolvedor NodeJS e MongoDB', 'Resumo do curso de NodeJS', '2018-01-01', 1, 159.99, 15), (2, 'curso_react_native.jpg', 'Multiplataforma Android/IOS com React e Redux', 'Resumo do curso de React Native', '2018-02-01', 1, 204.99, 37), (3, 'angular.jpg', 'Desenvolvimento WEB com ES6, TypeScript e Angular', 'Resumo do curso de ES6, TypeScript e Angular', '2018-03-01', 1, 579.99, 31), (4, 'web_completo_2.jpg', 'Web Completo 2.0', 'Resumo do curso de Web Completo 2.0', '2018-04-01', 1, 579.99, 59), (5, 'linux.jpg', 'Introdução ao GNU/Linux', 'Resumo do curso de GNU/Linux', '2018-05-01', 0, 0, 1)


/*
CREATE TABLE tb_cursos (
  id_curso INT(11) NOT NULL,
  imagem_curso VARCHAR(100) NOT NULL,
  nome_curso CHAR(50) NOT NULL,
  resumo TEXT NULL,
  data_cadastro DATETIME NOT NULL,
  ativo BOOLEAN DEFAULT 1,
  investimento FLOAT(8,2) DEFAULT 0,
  carga_horaria INT(5) NULL  
);
*/

TRUNCATE tb_cursos;

INSERT INTO tb_cursos(id_curso, imagem_curso, nome_curso, resumo, data_cadastro, ativo, investimento, carga_horaria) VALUES (1, 'curso_node.jpg', 'Curso Completo do Desenvolvedor NodeJS e MongoDB', 'Resumo do curso de NodeJS', '2018-01-01', 1, 159.99, 15), (2, 'curso_react_native.jpg', 'Multiplataforma Android/IOS com React e Redux', 'Resumo do curso de React Native', '2018-02-01', 1, 204.99, 37), (3, 'angular.jpg', 'Desenvolvimento WEB com ES6, TypeScript e Angular', 'Resumo do curso de ES6, TypeScript e Angular', '2018-03-01', 1, 579.99, 31), (4, 'web_completo_2.jpg', 'Web Completo 2.0', 'Resumo do curso de Web Completo 2.0', '2018-04-01', 1, 579.99, 59), (5, 'linux.jpg', 'Introdução ao GNU/Linux', 'Resumo do curso de GNU/Linux', '2018-05-01', 0, 0, 1)
