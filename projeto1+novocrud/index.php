<?php


include_once "topo.php"; 
?>

<div class="quick-actions">
    <a href="?pg=clientes-cadastro-form" class="action-button cliente" style="background-color: var(--primary-color);">Cadastrar Cliente</a> 
    <a href="?pg=cadastrar-produto" class="action-button produto">Cadastrar Produto</a>
</div>

<nav>
    <a href="index.php">Início</a>
    
    <a href="?pg=quemsomos">Quem Somos</a> 
    <a href="?pg=faleconosco">Fale Conosco</a> 
    
    <a href="?pg=clientes-admin">Listar Clientes</a>
    
    <a href="?pg=listar-produtos">Listar Produtos</a> 
</nav>

<?php

$pg = null;

if(empty($_SERVER["QUERY_STRING"]) || (isset($_GET['pg']) && $_GET['pg'] == 'principal')){
    $pg = "principal"; 
}elseif(isset($_GET['pg'])){
    $pg = $_GET['pg'];
}


$product_pages = ['listar-produtos', 'cadastrar-produto', 'editar-produto', 'excluir-produto'];
$client_pages = ['clientes-admin', 'clientes-cadastro-form', 'clientes-cadastro', 'clientes-altera-form', 'clientes-altera', 'clientes-excluir'];
$general_pages = ['principal', 'quemsomos', 'faleconosco']; 


$file_path = "$pg.php";
$is_page_allowed = false;

if (in_array($pg, $client_pages)) {
    $file_path = "crud_clientes/$pg.php"; 
    $is_page_allowed = true;

} elseif (in_array($pg, $product_pages)) {
    $file_path = "crud_produtos/$pg.php";
    $is_page_allowed = true;

} elseif (in_array($pg, $general_pages)) {
    $is_page_allowed = true;

}


if ($is_page_allowed && file_exists($file_path)) {
    include_once $file_path;
} else {
    echo "<h2 class='message error'>Funcionalidade não instalada ou arquivo $file_path não encontrado.</h2>";
}

include_once "rodape.php";
?>