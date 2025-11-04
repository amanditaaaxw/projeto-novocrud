<?php


    require_once 'config.inc.php';

   
    $id = mysqli_real_escape_string($conexao, $_POST['id']);
    $nome = mysqli_real_escape_string($conexao, $_POST['cliente']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
    $estado = mysqli_real_escape_string($conexao, $_POST['estado']);

   
    $sql = "UPDATE clientes SET cliente = '$nome',
                             cidade = '$cidade',
                             estado = '$estado'
            WHERE id = '$id'";


    if($resultado = mysqli_query($conexao, $sql)){
        echo "<div class='message success'><h2>Cliente alterado com sucesso!</h2></div>";
        echo "<a href='?pg=clientes-admin' class='action-link'>Voltar</a>";
    }else{
        echo "<div class='message error'><h3>Erro ao alterar cliente</h3></div>";
        echo "<p>Detalhes do Erro: " . mysqli_error($conexao) . "</p>";
        echo "<a href='?pg=clientes-admin' class='action-link'>Voltar</a>";
    }
    mysqli_close($conexao);