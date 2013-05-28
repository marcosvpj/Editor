<?php

$conteudo = '';
//$caminho_arquivo = '';
if ( isset($_GET['file']) ) {
	$nome_arquivo = $_GET['file'];
} else {
	$nome_arquivo = date('d-m-Y-Hi');
	header('Location: ?p=editor&file=' . $nome_arquivo);
}

$caminho_arquivo = 'data/' . $nome_arquivo . '.txt';
if( !file_exists($caminho_arquivo) ) {
	$handle = fopen($caminho_arquivo, 'a+');
	fclose($handle);
}

$conteudo = htmlspecialchars(file_get_contents($caminho_arquivo));

