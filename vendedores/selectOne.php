<?php

require_once 'inc/DB.php';

$db = new DB();
$vendedor = $db->getCon()
    ->query("SELECT * FROM vendedor WHERE id = $id")
    ->fetch();
