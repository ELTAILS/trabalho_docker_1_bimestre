<?php
$produtos = [
    ['id' => 1, 'nome' => 'Arroz', 'quantidade' => 50, 'marca' => 'Tio João', 'validade' => '2026-12-01', 'preco' => 25.90],
    ['id' => 2, 'nome' => 'Feijão', 'quantidade' => 30, 'marca' => 'Camil', 'validade' => '2026-10-15', 'preco' => 8.50],
    ['id' => 3, 'nome' => 'Óleo de Soja', 'quantidade' => 20, 'marca' => 'Liza', 'validade' => '2026-08-20', 'preco' => 7.30],
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="./css/listar.css">
</head>
<body>
    <h1>Lista de Produtos</h1>
    <a href="?url=produtos/novo" class="novo">+ Novo Produto</a>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Marca</th>
            <th>Validade</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto) : ?>
            <tr>
                <td><?= $produto['id'] ?></td>
                <td><?= $produto['nome'] ?></td>
                <td><?= $produto['quantidade'] ?></td>
                <td><?= $produto['marca'] ?></td>
                <td><?= $produto['validade'] ?></td>
                <td><?= $produto['preco'] ?></td>
                <td>
                    <a href="?url=produtos/editar&id=<?= $produto['id'] ?>">Editar</a>
                    <a href="?url=produtos/excluir&id=<?= $produto['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

</body>
</html>
