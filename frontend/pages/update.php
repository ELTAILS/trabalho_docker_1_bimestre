aqui fica a pagina de update do produto, os dados vai ser enviado para /store, e o metodo store vai ser chamado para salvar os dados no banco de dados.

<form action="<?= BASE_URL ?>/edit?id=<?= htmlspecialchars($produto['id']) ?>" method="POST" class="mt-5">

    <div class="mb-3">
        <label for="nome" class="form-label">Nome do Produto</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= $produto['nome'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade" min="0" value="<?= $produto['quantidade'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" class="form-control" id="marca" name="marca" value="<?= $produto['marca'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="validade" class="form-label">Validade</label>
        <input type="date" class="form-control" id="validade" name="validade" value="<?= $produto['validade'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" step="0.01" class="form-control" id="preco" name="preco" min="0.01" value="<?= $produto['preco'] ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">Editar</button>

</form>