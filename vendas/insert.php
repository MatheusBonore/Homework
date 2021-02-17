<?php

$valor = $_POST['valor'];

require_once './../inc/DB.php';

$db = new DB();
$db->getCon()
	->prepare('INSERT INTO venda (valor) VALUES (?)')
	->execute([$valor]);

http_response_code(200);
die(json_encode([
	'mensagem' => 'Venda Adicionado com Sucesso!!'
]));
