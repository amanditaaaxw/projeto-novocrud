<?php include('../conexao.php');

$id = $_GET['id'];
$sql = "DELETE FROM produtos WHERE id=$id";

if ($conexao->query($sql) === TRUE) {
    echo "Produto excluído com sucesso!";
} else {
    echo "Erro ao excluir: " . $conexao->error;
}
?>

<br><br>
<a href="listar-produtos.php">Voltar</a>
