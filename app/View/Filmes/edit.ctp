<?php
                    //FILME NOME MODELO
$form = $this->Form->create('Filme'); //Primeiro CRIA
$form .= $this->Form->hidden('Filme.id');
$form .= $this->Form->input('Filme.nome');
$form .= $this->Form->input('Filme.idioma');
$form .= $this->Form->input('Filme.duracao');
$form .= $this->Form->input('Filme.ano');
$form .= $this->Form->submit('Gravar');
$form .= $this->Form->end(); //Finaliza

echo $this->Html->tag('h1', 'Alterar Filme');
echo $form;

?>