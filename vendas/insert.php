<?php

$valor = $_POST['valor'];

$id_vendedor = $_POST['id_vendedor'];
$comissao = $_POST['comissao'];

require_once './../model/Venda.php';

$modelVenda = new Venda();
$modelVenda->insert($valor);

http_response_code(200);
die(json_encode([
	'mensagem' => 'Venda Adicionado com Sucesso!!'
]));
