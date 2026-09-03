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

    public function show(int $id): void
    {
        // Pagina para mostrar detalhes de um produto específico
    }

    public function create(): void
    {
        $this->render('produtos','Atacadão Infernal');
    }

    public function update(int $id): void
    {
        // Pagina para atualizar um produto existente
    }

    // Redirecionando a Logica de negocio

    public function store(string $nome, int $quantidade, string $marca, string $validade, float $preco): void
    {
        $this->service->create($nome, $quantidade, $marca, $validade, $preco);
    }

    public function edit(int $id, string $nome, int $quantidade, string $marca, string $validade, float $preco): void
    {
        $this->service->update($id, $nome, $quantidade, $marca, $validade, $preco);
    }

    public function delete(int $id): void
    {
        $this->service->delete($id);
    }
}