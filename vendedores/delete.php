<?php

$id = $_POST['id'];

require_once './../model/Vendedor.php';

$modelVendedor = new Vendedor();
$modelVendedor->delete($id);

http_response_code(200);
die(json_encode([
	'mensagem' => 'Vendedor Excluido com Sucesso!!'
]));
