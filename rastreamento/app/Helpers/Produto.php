<?php

namespace App\Helpers;

class Produto {
    public function salvarImagem($imagem)
    {
        return $imagem->store('/public/imagens');
    }
}