<?php

require_once './../inc/DB.php';

class Venda extends DB
{
    public function select()
    {
        return $this->getCon()
            ->query('SELECT * FROM venda')
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function selectId($id)
    {
        return $this->getCon()
            ->query("SELECT * FROM venda WHERE id = $id")
            ->fetch();
    }

    public function insert($valor)
    {
        return $this->getCon()
            ->prepare('INSERT INTO venda (valor) VALUES (?)')
            ->execute([$valor]);
    }
}
