<?php

namespace App\Repositorios;

use App\Interfaces\ICadastro;
use App\Interfaces\IEmail;
use App\Modelos\Cliente;

class ClienteRepositorio implements ICadastro, IEmail
{

    public function save(): object
    {
        return new Cliente;
    }

    public function delete(object $model): bool
    {
        return true;
    }

    public function update(object $model): object
    {
        return new Cliente;
    }

    public function edit(int $id): object
    {
        return new Cliente;
    }

    public function all(): array
    {
        return [];
    }

    public function find(int $id): object
    {
        return new Cliente;
    }

    public function enviarEmail(string $nome, string $email): bool
    {
        return true;
    }
}
