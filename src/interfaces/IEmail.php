<?php

namespace App\Interfaces;

interface IEmail
{

    public function enviarEmail(string $nome, string $email): bool;
}
