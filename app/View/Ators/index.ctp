<?php

$detalhe = array();
foreach ($ators as $ator){
    $deleteLink = $this->Html->link('Excluir', '/Ators/delete/' . $ator['Ator']['id']);
    $viewLink = $this->Html->link($ator['Ator']['nome'], '/ators/view/' . $ator['Ator']['id']);
  
    $detalhe[] = array(
        
        $viewLink,
        $ator['Ator']['datanascimento'],
        $deleteLink 
    );
}

echo $this->Html->tag('h1', 'Atores');

$titulos = array('Nome', 'Data Nascimento');
echo $this->Html->link('Cadastrar', 'add');
$header = $this->Html->tableHeaders($titulos);
$body = $this->Html->tableCells($detalhe);

echo $this->Html->tag('table', $header . $body);


?>