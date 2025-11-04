<?php


    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
       
        $cliente = mysqli_real_escape_string($conexao, $_POST["cliente"]);
        $cidade = mysqli_real_escape_string($conexao, $_POST["cidade"]);
        $estado = mysqli_real_escape_string($conexao, $_POST["estado"]);

        
        $sql = "INSERT INTO clientes (cliente, cidade, estado)
                VALUES ('$cliente', '$cidade', '$estado')";

        $inserir = mysqli_query($conexao, $sql);

        if($inserir) {
            echo "<div class='message success'>Cliente '$cliente' cadastrado com sucesso!</div>";
            echo "<a href='?pg=clientes-admin' class='action-link'>Voltar para a Lista</a>";
        }else{
          
            echo "<div class='message error'>Erro! Cadastro não realizado.</div>";
            echo "<p>Detalhes do Erro: " . mysqli_error($conexao) . "</p>";
            echo "<a href='?pg=clientes-cadastro-form' class='action-link'>Tentar novamente</a>";
        }

    }else{
        echo "<div class='message error'>Envio de dados não permitido.</div>";
        echo "<a href='?pg=clientes-cadastro-form' class='action-link'>Ir para o formulário</a>";
    }
    
    mysqli_close($conexao);
