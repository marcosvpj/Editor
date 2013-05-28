<?php

$salvo = file_put_contents('data/' .$_GET['file']. '.txt', $_POST['conteudo']);

if($salvo) {
	echo 'Arquivo Salvo';
} else {
	echo 'Ocorreu um erro ao salvar';
}

die();