<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

require_once './../inc/DB.php';

$db = new DB();
$db->getCon()
	->prepare('UPDATE vendedor SET nome = ?, email = ? WHERE id = ?')
	->execute([$nome, $email, $id]);

http_response_code(200);
die(json_encode([
	'mensagem' => 'Vendedor Atualizado com Sucesso!!'
]));
