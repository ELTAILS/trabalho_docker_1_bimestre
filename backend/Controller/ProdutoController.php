<?php

namespace App\Controller;
use App\Database\Conexao;
use App\Repository\ProdutoRepo;
use App\Service\ProdutoService;

class ProdutoController
{

    private ProdutoService $service;

    public function __construct()
    {
        $conexao = new Conexao();
        $repo = new ProdutoRepo($conexao->connect());
        $this->service = new ProdutoService($repo);
    }

    /**
     * Cria as paginas do site relacionadas ao produto.
     * @param string $page
     * @param array $data
     * @return void
     */
    public function render(string $page, string $titulo = "Atacadão", array $data = []): void
    {
        $title = $titulo;
        $dados = extract($data);
        require_once __DIR__ . '/../../frontend/componentes/header.php';
        require_once __DIR__ . "/../../frontend/pages/$page.php";
        require_once __DIR__ . '/../../frontend/componentes/footer.php';
    }

    // Paginas do produto
    public function index(): void
    {
        $this->render('home','atacadão infernal');
    }

    public function read(): void
    {
        $this->render('produtos','Atacadão Infernal');
    }

    public function show(): void
    {
        // Pagina para mostrar detalhes de um produto específico
    }

    public function create(): void
    {
        $this->render('create','Atacadão Infernal');
    }

    public function update(): void
    {
        $this->render('update','Atualizar Produto');
    }

    // Redirecionando a Logica de negocio

    public function store(): void
    {
        $nome = $_POST['nome'] ?? '';
        $quantidade = $_POST['quantidade'] ?? 0;
        $marca = $_POST['marca'] ?? '';
        $validade = $_POST['validade'] ?? '';
        $preco = $_POST['preco'] ?? 0.0;

        $this->service->create($nome, $quantidade, $marca, $validade, $preco);
    }

    public function edit(): void
    {
        $id = $_POST['id'] ?? 0;
        $nome = $_POST['nome'] ?? '';
        $quantidade = $_POST['quantidade'] ?? 0;
        $marca = $_POST['marca'] ?? '';
        $validade = $_POST['validade'] ?? '';
        $preco = $_POST['preco'] ?? 0.0;

        $this->service->update($id, $nome, $quantidade, $marca, $validade, $preco);
    }

    public function delete(): void
    {
        $id = $_POST['id'] ?? 0;
        $this->service->delete($id);
    }
}