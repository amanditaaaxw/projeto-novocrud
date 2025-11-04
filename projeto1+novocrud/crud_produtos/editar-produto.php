<?php 


require_once "config.inc.php"; 


if (!isset($_GET['id'])) {
    echo "<h2>Erro: ID do produto não especificado.</h2>";
    echo "<a href='?pg=listar-produtos'>Voltar para a Lista de Produtos</a>";
    exit;
}


$id = $conexao->real_escape_string($_GET['id']);


if ($_POST) {
    
    $nome = $conexao->real_escape_string($_POST['nome']);
    $categoria = $conexao->real_escape_string($_POST['categoria']);
    $preco = $conexao->real_escape_string($_POST['preco']);
    $quantidade = $conexao->real_escape_string($_POST['quantidade']);
    $descricao = $conexao->real_escape_string($_POST['descricao']);

    $sql = "UPDATE produtos SET nome='$nome', categoria='$categoria', preco='$preco',
            quantidade='$quantidade', descricao='$descricao' WHERE id=$id";

    if ($conexao->query($sql) === TRUE) {
        echo "<p style='color: green;'>Produto atualizado com sucesso!</p>";
       
        header("Location: ?pg=editar-produto&id=$id"); 
        exit;
    } else {
        echo "<p style='color: red;'>Erro: " . $conexao->error . "</p>";
    }
}


$sql = "SELECT * FROM produtos WHERE id=$id";
$resultado = $conexao->query($sql);

if ($resultado->num_rows == 0) {
    echo "<h2>Produto não encontrado.</h2>";
    echo "<a href='?pg=listar-produtos'>Voltar para a Lista de Produtos</a>";
    exit;
}

$produto = $resultado->fetch_assoc();
?>

<h2>Editar Produto</h2>

<form method="POST" action="?pg=editar-produto&id=<?php echo $id; ?>">
  Nome: <input type="text" name="nome" value="<?php echo $produto['nome']; ?>"><br><br>
  Categoria: <input type="text" name="categoria" value="<?php echo $produto['categoria']; ?>"><br><br>
  Preço: <input type="text" name="preco" value="<?php echo $produto['preco']; ?>"><br><br>
  Quantidade: <input type="number" name="quantidade" value="<?php echo $produto['quantidade']; ?>"><br><br>
  Descrição: <textarea name="descricao"><?php echo $produto['descricao']; ?></textarea><br><br>
  <input type="submit" value="Salvar Alterações">
</form>

<a href="?pg=listar-produtos">Voltar</a>