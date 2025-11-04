Continuação do projeto feito em sala com um novo crud

Tema escolhido: gerenciamento de produtos 

implementei 4 ações do famoso CRUD:

C- create (Cadastrar novos produtos - `cadastrar-produto.php`)
R- read (Listar e Ver os produtos - `listar-produtos.php`)
U- update (Mudar as informações - `editar-produto.php`)
D- delete (Apagar um produto - `excluir-produto.php`)

para poder executar o arquivo é necessario criar um novo banco de dados e
abrir http://localhost/projeto1+novocrud/  no navegador
 
script para criação do banco de dados e as tabelas produtos e clientes.
 Arquivo: sistema.sql
 
 1. Tabela CLIENTES
CREATE TABLE clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cliente VARCHAR(100) NOT NULL,
  cidade VARCHAR(50),
  estado CHAR(2)
);

 2. Tabela PRODUTOS 
CREATE TABLE produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  categoria VARCHAR(50),
  preco DECIMAL(10,2),
  quantidade INT,
  descricao TEXT
);
