<?php

namespace Homework\controller;

use Homework\model as model;

class Vendedor
{
    public function listarAction()
    {
        $vendedores = new model\Vendedor();
        $vendedores = $vendedores->select();

        include 'templates/lista-vendedor.phtml';
    }

    public function cadastroAction()
    {
        $cadastro = true;

        include 'templates/formulario-vendedor.phtml';
    }

    public function cadastrarAction()
    {
        $nome = filter_var($_POST['nome']);
        $email = filter_var($_POST['email']);

        $modelVendedor = new model\Vendedor();
        $modelVendedor->insert($nome, $email);

        http_response_code(200);
        die(json_encode([
            'mensagem' => 'Vendedor Adicionado com Sucesso!!'
        ]));
    }

    public function abrirAtualizacaoAction()
    {
        $id = $_GET['id'];

        $cadastro = false;
        $vendedor = new model\Vendedor();
        $vendedor = $vendedor->selectOne($id);

        include 'templates/formulario-vendedor.phtml';
    }

    public function atualizarAction()
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $modelVendedor = new model\Vendedor();
        $modelVendedor->update($nome, $email, $id);

        http_response_code(200);
        die(json_encode([
            'mensagem' => 'Vendedor Atualizado com Sucesso!!'
        ]));
    }

    public function excluirAction()
    {
        $id = $_POST['id'];

        $modelVendedor = new model\Vendedor();
        $modelVendedor->delete($id);

        http_response_code(200);
        die(json_encode([
            'mensagem' => 'Vendedor Excluido com Sucesso!!'
        ]));
    }
}