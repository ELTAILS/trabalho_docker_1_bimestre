<strong>OPCIONAL</strong>
aqui fica a pagina para mostrar detalhes de um produto específico, ele deve redirecionar para a rota /show do produto, que vai chamar o metodo show do ProdutoController, que vai chamar o metodo read do ProdutoService, que vai chamar o metodo read do ProdutoRepository, que vai buscar o produto no banco de dados e retornar os detalhes do produto.

<div>
    <h1><?= $produto['nome'] ?></h1>
    <p>Quantidade: <?= $produto['quantidade'] ?></p>
    <p>Marca: <?= $produto['marca'] ?></p>
    <p>Validade: <?= $produto['validade'] ?></p>
    <p>Preço: <?= $produto['preco'] ?></p>
    <a href="<?= BASE_URL ?>/read">Voltar</a>
</div>