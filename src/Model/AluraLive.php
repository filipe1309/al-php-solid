<?php

namespace Alura\Solid\Model;

class Curso implements Pontuavel
{
    public function recuperarPontuacao(): int
    {
        return 150;
    }
}
