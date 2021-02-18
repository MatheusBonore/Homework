<?php

require_once './../model/Venda.php';

$vendas = new Venda();
$vendas->selectId($id);
