<?php

class Livro {
    private $livros = [];

    public function __construct() {
        $this->livros = [
            [
                'titulo' => 'Harry Potter e a Pedra Filosofal',
                'autor' => 'J.K. Rowling',
                'ano' => 1997
            ],
            [
                'titulo' => 'O Castelo Animado',
                'autor' => 'Diana Wynne Jones',
                'ano' => 1986
            ],
            [
                'titulo' => 'Alice no País das Maravilhas',
                'autor' => 'Lewis Carroll',
                'ano' => 1865
            ],
            [
                'titulo' => 'Como Treinar o Seu Dragão',
                'autor' => 'Cressida Cowell',
                'ano' => 2003
            ],
            [
                'titulo' => 'Coraline',
                'autor' => 'Neil Gaiman',
                'ano' => 2002
            ]
        ];
    }

    public function listarLivros() {
        return $this->livros;
    }
}
