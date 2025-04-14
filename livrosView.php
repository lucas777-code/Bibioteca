<?php

function exibirLivros($livros) {
    echo "<h1>Lista de Livros</h1>";
    echo "<ul>";
    foreach ($livros as $livro) {
        echo "<li>Título: {$livro['titulo']} | Autor: {$livro['autor']} | Ano: {$livro['ano']}</li>";
    }
    echo "</ul>";
}