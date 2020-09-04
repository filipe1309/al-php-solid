<?php

namespace Alura\Solid\Model;

class AluraLive extends Video implements Pontuavel
{
    public function recuperarPontuacao(): int
    {
        return 150;
    }
}
