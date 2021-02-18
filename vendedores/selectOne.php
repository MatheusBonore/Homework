<?php

require_once './../model/Vendedor.php';

$vendedor = new Vendedor();
$vendedor->selectOne($id);
