<?php

namespace Homework\controller;

use Homework\model as model;

class Venda
{
    public function listarAction()
    {
        $vendas = new model\Venda();

        if (isset($_GET['id_vendedor'])) {
            $id_vendedor = $_GET['id_vendedor'];

            $vendedor = new model\Vendedor();
            $vendedor = $vendedor->selectOne($id_vendedor);

            $vendas = $vendas->selectId($id_vendedor);
        } else {
            $vendas = $vendas->select();
        }

        include 'templates/lista-venda.phtml';
    }

    public function cadastroAction()
    {
        $vendedores = new model\Vendedor();
        $vendedores = $vendedores->select();

        include 'templates/formulario-venda.phtml';
    }

    public function cadastrarAction()
    {
        $valor = filter_var($_POST['valor']);
        $id_vendedor = filter_var($_POST['id_vendedor']);
        $comissao = filter_var($_POST['comissao']);
        
        $modelVenda = new model\Venda();
        $modelVenda->insert($valor, $id_vendedor, ($comissao / 100) * $valor);

        http_response_code(200);
        die(json_encode([
            'mensagem' => 'Venda Adicionada com Sucesso!!'
        ]));
    }
}