<?php

$nome = filter_var($_POST['nome']);
$email = filter_var($_POST['email']);

require_once './../model/Vendedor.php';

$modelVendedor = new Vendedor();
$modelVendedor->insert($nome, $email);

http_response_code(200);
die(json_encode([
	'mensagem' => 'Vendedor Adicionado com Sucesso!!'
]));
