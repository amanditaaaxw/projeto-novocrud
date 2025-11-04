<?php


    require "config.inc.php";

    $id = $_REQUEST["id"];
    
   
    $id_seguro = mysqli_real_escape_string($conexao, $id);

    $sql = "SELECT * FROM clientes WHERE id = '$id_seguro'";

    $resultado = mysqli_query($conexao, $sql);
    
    
    if(mysqli_num_rows($resultado) > 0){
        
        $dados = mysqli_fetch_array($resultado);
        $nome = $dados["cliente"];
        $cidade = $dados["cidade"];
        $estado = $dados["estado"];
        $id_original = $dados["id"];
        
?>
<h2>Alteração de Dados do Cliente</h2>
<form action="?pg=clientes-altera" method="post">
    <input type="hidden" name="id" value="<?=$id_original?>">
    
    <label for="cliente">Nome:</label>
    <input type="text" id="cliente" name="cliente" value="<?=$nome?>" required>
    
    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" value="<?=$cidade?>" required>
    
    <label for="estado">Estado:</label>
    <input type="text" id="estado" name="estado" value="<?=$estado?>">
    
    <input type="submit" value="Alterar Cliente">
</form>
<?php
}else{
        echo "<div class='message error'>Nenhum cliente encontrado com o ID $id.</div>";
    }
    mysqli_close($conexao);