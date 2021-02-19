<?php

namespace Homework\Model;

require_once 'inc/DB.php';

class Venda extends \Homework\Inc\DB
{
    public function select()
    {
        return $this->getCon()
            ->query('SELECT venda.id, vendedor.nome, vendedor.email, venda.comissao, venda.valor, venda.data_venda FROM venda INNER JOIN vendedor ON venda.id_vendedor = vendedor.id')
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function selectId($id_vendedor)
    {
        return $this->getCon()
            ->query("SELECT * FROM venda WHERE id_vendedor = $id_vendedor")
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert($valor, $id_vendedor, $comissao)
    {

        var_dump($this->getCon()
            ->prepare('INSERT INTO venda (valor, id_vendedor, comissao, data_venda) VALUES (?, ?, ?, CURDATE())')
            ->execute([$valor, $id_vendedor, $comissao]));

        var_dump('INSERT INTO venda (valor, id_vendedor, comissao, data_venda) VALUES (?, ?, ?, CURDATE())');
        var_dump([$valor, $id_vendedor, $comissao]);
        return $this->getCon()
            ->prepare('INSERT INTO venda (valor, id_vendedor, comissao, data_venda) VALUES (?, ?, ?, CURDATE())')
            ->execute([$valor, $id_vendedor, $comissao]);
    }
}
