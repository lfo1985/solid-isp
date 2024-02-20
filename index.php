<?php

require_once __DIR__.'/vendor/autoload.php';

use App\Moedas\Dolar;
use App\Moedas\Libra;
use App\Cotacao;

$cotacaoDolar = new Cotacao;
$cotacaoDolar->setMoeda(new Dolar);
$cotacaoDolar->setValue(34.50);

$cotacaoLibra = new Cotacao;
$cotacaoLibra->setMoeda(new Libra);
$cotacaoLibra->setValue(34.50);

echo '<h2>Valor total (Cotação do dolar a '.$cotacaoDolar->getMoeda()->getRate().'): '.$cotacaoDolar->getValue().'</h2>';
echo '<h2>Valor total (Cotação da libra a '.$cotacaoLibra->getMoeda()->getRate().'): '.$cotacaoLibra->getValue().'</h2>';