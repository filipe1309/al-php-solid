<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\{ AluraMais, Curso, Pontuavel};

class CalculadorPontuacao
{
    public function recuperarPontuacao(Pontuavel $conteudo)
    {
        return $conteudo->recuperarPontuacao();
    }
}
