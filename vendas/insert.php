<?php

$valor = $_POST['valor'];

$id_vendedor = $_POST['id_vendedor'];
$comissao = $_POST['comissao'];
// $data_venda = $_POST['data_venda'];

require_once './../inc/DB.php';

$db = new DB();
$db->getCon()
	->prepare('INSERT INTO venda (valor) VALUES (?)')
	->execute([$valor]);

// $db->getCon()
// 	->prepare('INSERT INTO venda_vendedor (id_vendedor, id_venda, comissao, data_venda) VALUES (?, ?, ?, ?)')
// 	->execute([$id_vendedor, $id_venda, $comissao, $data_venda]);

http_response_code(200);
die(json_encode([
	'mensagem' => 'Venda Adicionado com Sucesso!!'
]));
