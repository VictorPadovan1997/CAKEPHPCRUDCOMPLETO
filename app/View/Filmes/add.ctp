<?php
                    //FILME NOME MODELO
$form = $this->Form->create('Filme'); //Primeiro CRIA
$form .= $this->Form->input('Filme.nome', array('required' => false));
$form .= $this->Form->input('Filme.idioma', array(
    'type' => 'select',
    'options' => array('Inglês' => 'Inglês', 'Portugues' => 'Portugues')
));
$form .= $this->Form->input('Filme.duracao', array('label' => array('text' => 'Duração')));
$form .= $this->Form->input('Filme.genero', array (
    'type' => 'select',
    'options' => array('Comedia' => 'Comedia', 'Aventura' => 'Aventura', 'Drama' => 'Drama')
));
$form .= $this->Form->input('Filme.ano', array('type' => 'text', 'maxlength' => 4));
$form .= $this->Form->submit('Gravar');
$form .= $this->Form->end(); //Finaliza

echo $this->Html->tag('h1', 'Novo Filme');
echo $form;

?>