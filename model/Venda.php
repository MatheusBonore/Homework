<?php

namespace Homework\model;

class Venda extends \Homework\inc\DB
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
            ->query("SELECT venda.id, vendedor.nome, vendedor.email, venda.comissao, venda.valor, venda.data_venda FROM venda INNER JOIN vendedor ON venda.id_vendedor = vendedor.id WHERE vendedor.id = $id_vendedor")
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert($valor, $id_vendedor, $comissao)
    {
        $statement = (
            $this->getCon()
            ->prepare('INSERT INTO venda (valor, id_vendedor, comissao, data_venda) VALUES (?, ?, ?, CURDATE())')
        );

        if (!$statement->execute([$valor, $id_vendedor, $comissao])) {
            print_r($statement->errorInfo());
            exit;
        }
    }
}
