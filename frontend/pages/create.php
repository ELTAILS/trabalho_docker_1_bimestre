aqui fica o form para cadastrar um produto, ele deve redirecionar para a rota /store do produto, que vai chamar o metodo store do ProdutoController, que vai chamar o metodo create do ProdutoService, que vai chamar o metodo create do ProdutoRepository, que vai inserir o produto no banco de dados.

<!--AQUI é o form funciona, costumese ele adicionando classes somentes-->

<form action="<?= BASE_URL ?>/store" method="POST" class="mt-5">

    <div class="mb-3">
        <label for="nome" class="form-label">Nome do Produto</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto" required>
    </div>

    <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade" min="0" placeholder="Quantidade no estoque" required>
    </div>

    <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" class="form-control" id="marca" name="marca" placeholder="A marca do produto" required>
    </div>

    <div class="mb-3">
        <label for="validade" class="form-label">Validade</label>
        <input type="date" class="form-control" id="validade" name="validade" required>
    </div>

    <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" step="0.01" class="form-control" id="preco" name="preco" min="0.01" placeholder="Preço do produto" required>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>