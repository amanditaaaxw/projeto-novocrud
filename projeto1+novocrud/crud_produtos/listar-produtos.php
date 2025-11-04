<?php 

require_once "config.inc.php"; 

echo "<h2>Lista de Produtos</h2>";


echo "<a href='?pg=cadastrar-produto' class='link-cadastro'>Cadastrar Novo Produto</a><br><br>";

$sql = "SELECT * FROM produtos";
$resultado = $conexao->query($sql);

if ($resultado && $resultado->num_rows > 0) { 
  echo "<table border='1' cellpadding='5'>";
  echo "<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Categoria</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Ações</th>
  </tr>";

  while($linha = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$linha['id']."</td>";
    echo "<td>".$linha['nome']."</td>";
    echo "<td>".$linha['categoria']."</td>";
    echo "<td>".$linha['preco']."</td>";
    echo "<td>".$linha['quantidade']."</td>";
    echo "<td>
            <a href='?pg=editar-produto&id=".$linha['id']."'>Editar</a> |
            <a href='?pg=excluir-produto&id=".$linha['id']."' onclick=\"return confirm('Tem certeza?')\">Excluir</a>
          </td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
    echo "<p>Nenhum produto cadastrado.</p>";
}

$conexao->close();