
<?php

$detalhe = array();
foreach ($filmes as $filme){
    $editLink = $this->Html->link('Alterar', '/filmes/edit/' . $filme['Filme']['id']);
    $viewLink = $this->Html->link($filme['Filme']['nome'], '/filmes/view/' . $filme['Filme']['id']);
    $deleteLink = $this->Html->link('Excluir', '/filmes/delete/' . $filme['Filme']['id']);

    $detalhe[] = array (
        $viewLink,
        $filme['Filme']['ano'],
        $filme['Filme']['duracao'],
        $filme['Filme']['idioma'],
        $filme['Filme']['genero'],
        $editLink . ' ' . $deleteLink
    );
}
$novoButton = $this->Html->Link('Novo Filme', '/filmes/add');

$novoAtor = $this->Html->Link('Cadastrar Ator', '/ators/add');
$novaCritica = $this->Html->Link('Nova Critica', '/criticas');


$titulos = array('Nome', 'Ano', 'Duracao', 'Idioma', 'Genero');
$header = $this->Html->tableHeaders($titulos);
$body = $this->Html->tableCells($detalhe);


echo $novaCritica;
echo $novoButton;
echo $this->Html->tag('table', $header . $body);
echo $novoAtor;



?>                                                                                                   