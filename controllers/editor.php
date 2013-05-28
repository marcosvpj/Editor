<?php

$conteudo = '';
//$caminho_arquivo = '';
if ( isset($_GET['file']) ) {
	$nome_arquivo = $_GET['file'];
} else {
	$nome_arquivo = date('d-m-Y-Hi');
}

$caminho_arquivo = 'data/' . $nome_arquivo . '.txt';
if( !file_exists($caminho_arquivo) ) {
	$handle = fopen($caminho_arquivo, 'a+');
	fclose($handle);
	header('Location: ?p=editor&file=' . $nome_arquivo);
}

$conteudo = htmlspecialchars(file_get_contents($caminho_arquivo));


?>