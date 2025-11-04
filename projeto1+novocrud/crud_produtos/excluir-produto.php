<?php 

require_once __DIR__ . '/../conexao.php'; 
?>

<?php

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID do produto não fornecido.");
}


$id = $_GET['id'];

$id_seguro = (int)$id; 


$sql = "DELETE FROM produtos WHERE id=$id_seguro";

if ($conexao->query($sql) === TRUE) {
    echo "Produto excluído com sucesso!";
} else {
    echo "Erro ao excluir: " . $conexao->error;
}
?>

<br><br>
<a href="listar-produtos.php">Voltar</a>