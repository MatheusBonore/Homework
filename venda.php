<?php

namespace Homework\Controller;

use Homework\Model as Model;

require_once 'inc/BaseController.php';
require_once 'model/Venda.php';
require_once 'model/Vendedor.php';

class Venda extends \Homework\Inc\BaseController
{
    public function listarAction()
    {
        $vendas = new Model\Venda();

        if (isset($_GET['id_vendedor'])) {
            $id_vendedor = $_GET['id_vendedor'];

            $vendas = $vendas->selectId($id_vendedor);
        } else {
            $vendas = $vendas->select();
        }

        include 'templates/lista-venda.phtml';
    }

    public function cadastroAction()
    {
        $vendedores = new Model\Vendedor();
        $vendedores = $vendedores->select();

        include 'templates/formulario-venda.phtml';
    }

    public function cadastrarAction()
    {
        $valor = filter_var($_POST['valor']);
        $id_vendedor = filter_var($_POST['id_vendedor']);
        $comissao = filter_var($_POST['comissao']);
        
        $modelVenda = new Model\Venda();
        $modelVenda->insert($valor, $id_vendedor, $comissao);

        http_response_code(200);
        die(json_encode([
            'mensagem' => 'Venda Adicionado com Sucesso!!'
        ]));
    }
}
new Venda();
