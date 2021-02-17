<?php

$id = $_POST['id'];

require_once './../inc/DB.php';

$db = new DB();
$db->getCon()
	->prepare('DELETE FROM vendedor WHERE id = ?')
	->execute([$id]);

http_response_code(200);
die(json_encode([
	'mensagem' => 'Vendedor Excluido com Sucesso!!'
]));
