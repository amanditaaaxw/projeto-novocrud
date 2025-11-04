<?php 

require_once "config.inc.php"; 

echo "<h2>Cadastrar Produto</h2>";



if ($_POST) {
    
    
    $nome = $conexao->real_escape_string($_POST['nome']);
    $categoria = $conexao->real_escape_string($_POST['categoria']);
    $preco = $conexao->real_escape_string($_POST['preco']);
    $quantidade = $conexao->real_escape_string($_POST['quantidade']);
    $descricao = $conexao->real_escape_string($_POST['descricao']);

    $sql = "INSERT INTO produtos (nome, categoria, preco, quantidade, descricao)
            VALUES ('$nome', '$categoria', '$preco', '$quantidade', '$descricao')";

    if ($conexao->query($sql) === TRUE) {
        echo "<p style='color:green;'>Produto cadastrado com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Erro ao cadastrar: " . $conexao->error . "</p>";
    }
}
?>

<form method="POST" action="">
  Nome: <input type="text" name="nome"><br><br>
  Categoria: <input type="text" name="categoria"><br><br>
  Preço: <input type="text" name="preco"><br><br>
  Quantidade: <input type="number" name="quantidade"><br><br>
  Descrição: <textarea name="descricao"></textarea><br><br>
  <input type="submit" value="Cadastrar">
</form>

<a href="?pg=listar-produtos">Ver Produtos</a>