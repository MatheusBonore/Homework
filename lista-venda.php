<?php require_once 'vendas/select.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        <h1>Lista de Vendas</h1>
        <table class="table table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comissão</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendas as $venda) : ?>
                    <tr>
                        <th scope="row"><?= $venda['id'] ?? '' ?></th>
                        <td><?= $venda['nome'] ?? '' ?></td>
                        <td><?= $venda['email'] ?? '' ?></td>
                        <td><?= $venda['comissao'] ?? '' ?></td>
                        <td><?= $venda['valor'] ?? '' ?></td>
                        <td><?= $venda['data'] ?? '' ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a class="btn btn-success" href="formulario-venda" role="button">Adicionar</a>
    </div>
</main>