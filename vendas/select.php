<?php

require_once 'inc/DB.php';

$db = new DB();
$vendas = $db->getCon()
	->query('SELECT * FROM venda')
	->fetchAll(\PDO::FETCH_ASSOC);
