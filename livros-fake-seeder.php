<?php
session_start();

$livros = [
    [
        'titulo'     => 'Mais inteligente que o diabo',
        'autor'     => 'Napolleon Hill',
        'ano'     =>  '1989-02-01',
        'colecao'     => 'Sim',
        'descricao'     => 'O medo é a ferramenta de um diabo idealizado pelo homem. Em 1938, após a publicação do seu best seller mundial Pense e Enriqueça, Napolion hill revela que quebrou o código mental do diabo e o forçou a confessar os seus segredos.',
        'upload'     => 'https://http2.mlstatic.com/D_NQ_NP_913005-MLB44104067489_112020-O.jpg',
    ],
    [
        'titulo'     => 'Orgulho e Preconceito',
        'autor'     => 'Jane Austen',
        'ano'     =>  '1989-02-01',
        'colecao'     => 'Nao',
        'descricao'     => 'Alguma coisa sobre o livro',
        'upload'     => 'https://cdn.maioresemelhores.com/imagens/orgulho-e-preconceito-1-cke.jpg',
    ],
];

foreach($livros as $livro)
{
    $_SESSION['cadastro'][] = $livro;
}

header('Location: index.php');
