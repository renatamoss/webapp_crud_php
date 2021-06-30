<?php

class Cadastro
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function adicionar(string $produto, string $quantidade, string $preco, string $descricao): void
    {
        $insereCadastro = $this->mysql->prepare('INSERT INTO produtos (produto, quantidade, preco, descricao) values (?,?,?,?);');
        $insereCadastro->bind_param('ssss', $produto, $quantidade, $preco, $descricao);
        $insereCadastro->execute();
    }

    public function remover(string $id): void
    {
        $removerCadastro = $this->mysql->prepare('DELETE FROM produtos WHERE id = ?');
        $removerCadastro->bind_param('s', $id);
        $removerCadastro->execute();
    }

    public function exibirTodos(): array
    {
        $resultado = $this->mysql->query('SELECT id, produto, quantidade, preco, descricao, inserido_em FROM produtos');
        $produtos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $produtos;
    }

    public function encontrarPorId(string $id): array
    {
        $selecionaCadastro = $this->mysql->prepare("SELECT id, produto, quantidade, preco, descricao FROM produtos WHERE id = ?");
        $selecionaCadastro->bind_param('s', $id); 
        $selecionaCadastro->execute();
        $produtos = $selecionaCadastro->get_result()->fetch_assoc();
        return $produtos;
    }

    public function editar(string $id, string $produto, string $quantidade, string $preco, string $descricao ): void
    {
        $editaCadastro = $this->mysql->prepare('UPDATE produtos SET produto = ?, quantidade = ?, preco = ?, descricao = ? WHERE id = ?');
        $editaCadastro->bind_param('sssss', $produto, $quantidade, $preco, $descricao, $id);
        $editaCadastro->execute();
    }
};
