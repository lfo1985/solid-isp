<?php

namespace App\Repositorios;

use App\Interfaces\ICadastro;
use App\Interfaces\IEmail;
use App\Modelos\Cliente;

class ClienteRepositorio implements ICadastro, IEmail
{

    private $cliente;

    function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function save(): object
    {
        return $this->cliente;
    }

    public function delete(object $model): bool
    {
        return true;
    }

    public function update(object $model): object
    {
        return $this->cliente;
    }

    public function edit(int $id): object
    {
        return $this->cliente;
    }

    public function all(): array
    {
        return [];
    }

    public function find(int $id): object
    {
        return $this->cliente;
    }

    public function enviarEmail(string $nome, string $email): bool
    {
        return true;
    }
}
