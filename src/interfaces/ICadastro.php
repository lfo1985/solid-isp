<?php

namespace App\Interfaces;

interface ICadastro
{

    public function save(): object;

    public function delete(object $model): bool;

    public function update(object $model): object;

    public function edit(int $id): object;

    public function all(): array;

    public function find(int $id): object;
}
