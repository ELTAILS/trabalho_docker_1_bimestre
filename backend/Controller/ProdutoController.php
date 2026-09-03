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
        // $title = $titulo;
        // extract($data);
        // Header
        // Pagina
        // footer
    }

    // Paginas do produto
    public function index(): void
    {
        // Pagina para listar todos os produtos
    }

    public function show(int $id): void
    {
        // Pagina para mostrar detalhes de um produto específico
    }

    public function create(): void
    {
        // Pagina para criar um novo produto
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