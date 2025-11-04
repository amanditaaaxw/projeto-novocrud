<?php


    require "config.inc.php"; 

    echo "<h2>Administração de Clientes</h2>";
    
    
    echo "<a href='?pg=clientes-cadastro-form' class='link-cadastro'>+ CADASTRAR NOVO CLIENTE</a>";
    
    $sql = "SELECT * FROM clientes ORDER BY cliente ASC";
    $resultado = mysqli_query($conexao, $sql);
    
    if(mysqli_num_rows($resultado) > 0){
        
        echo "<table>";
        echo "<thead><tr><th>ID</th><th>Nome</th><th>Cidade</th><th>Estado</th><th>Ações</th></tr></thead>";
        echo "<tbody>";

        while($dados = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>".$dados['id']."</td>";
            echo "<td>".$dados['cliente']."</td>";
            echo "<td>".$dados['cidade']."</td>";
            echo "<td>".$dados['estado']."</td>";
            echo "<td>";
            
           
            echo "<a href='?pg=clientes-altera-form&id=".$dados['id']."' class='action-link link-alterar'>Alterar</a>";
            
            
            echo "<a href='?pg=clientes-excluir&id=".$dados['id']."' class='action-link link-excluir' onclick='return confirm(\"Tem certeza que deseja excluir o cliente ".$dados['cliente']."?\")'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }
        
        echo "</tbody>";
        echo "</table>";
    } else {
         echo "<p>Nenhum cliente cadastrado no momento.</p>";
    }
    
    mysqli_close($conexao);