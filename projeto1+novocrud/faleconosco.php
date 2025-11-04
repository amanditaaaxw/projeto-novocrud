<?php

?>
<h2>Fale Conosco</h2>
<p>
    Se você tiver alguma dúvida, sugestão ou precisar de suporte, entre em contato conosco.
    Nossa equipe está pronta para atendê-lo.
</p>

<form action="" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>
    
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="assunto">Assunto:</label>
    <input type="text" id="assunto" name="assunto"><br><br>
    
    <label for="mensagem">Mensagem:</label><br>
    <textarea id="mensagem" name="mensagem" rows="6" cols="50" required></textarea><br><br>
    
    <input type="submit" value="Enviar Mensagem">
</form>