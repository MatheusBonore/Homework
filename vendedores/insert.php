<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

require_once './../inc/DB.php';

$db = new DB();
$db->getCon()
	->prepare('INSERT INTO vendedor (nome, email) VALUES (?, ?)')
	->execute([$nome, $email]);

http_response_code(200);
die(json_encode([
	'mensagem' => 'Vendedor Adicionado com Sucesso!!'
]));
