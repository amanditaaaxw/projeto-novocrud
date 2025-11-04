<?php

?>
<div>
    <h2>Cadastro de Cliente</h2>
    <form action="?pg=clientes-cadastro" method="post">
        <label for="cliente">Nome:</label>
        <input type="text" id="cliente" name="cliente" required>
        
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required>
        
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" maxlength="2">
        
        <input type="submit" value="Cadastrar">
    </form>
</div>