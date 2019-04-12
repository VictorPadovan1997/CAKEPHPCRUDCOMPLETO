<?php
$view = $this->Html->tag('h2', 'Nome');
$view .= $this->Html->para('', $this->request->data['Critica']['nome']);

$view .= $this->Html->tag('h2', 'Data Nascimento');
$view .= $this->Html->para('', $this->request->data['Critica']['avaliacao']);

$voltar = $this->Html->link('Voltar', '/ators');


echo $this->Html->tag('h1', 'Visualizar');
echo $view;
echo $voltar;


?>