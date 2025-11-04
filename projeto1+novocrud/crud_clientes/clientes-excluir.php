<?php


    require_once 'config.inc.php';

    $id = $_GET['id'];
    
   
    $id_seguro = mysqli_real_escape_string($conexao, $id);
    
    $sql = "DELETE FROM clientes WHERE id = '$id_seguro'";

    if(mysqli_query($conexao, $sql)){
        echo "<div class='message success'><h2>Cliente Excluído com sucesso.</h2></div>";
        echo "<a href='?pg=clientes-admin' class='action-link'>Voltar</a>";
    }else{
        echo "<div class='message error'><h2>Erro ao excluir Cliente.</h2></div>";
        echo "<p>Detalhes do Erro: " . mysqli_error($conexao) . "</p>";
        echo "<a href='?pg=clientes-admin' class='action-link'>Voltar</a>";
    }
    mysqli_close($conexao);