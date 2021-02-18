<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

require_once './../model/Vendedor.php';

$modelVendedor = new Vendedor();
$modelVendedor->update($nome, $email, $id);

http_response_code(200);
die(json_encode([
	'mensagem' => 'Vendedor Atualizado com Sucesso!!'
]));
