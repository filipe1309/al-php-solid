<?php

require_once 'vendor/autoload.php';

use Alura\Solid\Model\AluraMais;

$newAluraMais = new AluraMais('Teste', 'opcional');
echo $newAluraMais->recuperarUrl();