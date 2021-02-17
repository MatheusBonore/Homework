<?php

require_once 'inc/DB.php';

$db = new DB();
$vendedores = $db->getCon()
    ->query('SELECT * FROM vendedor')
    ->fetchAll(\PDO::FETCH_ASSOC);
