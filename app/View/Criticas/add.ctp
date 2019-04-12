<?php
                    //FILME NOME MODELO
$form = $this->Form->create('Critica'); //Primeiro CRIA
$form .= $this->Form->input('Critica.nome', array('required' => false));
$form .= $this->Form->input('Critica.avaliacao');
$form .= $this->Form->input('Critica.data_avaliacao');
$form .= $this->Form->input('Critica.filme_id', array(
    'type' => 'select',
    'options' => $filmes
));
$form .= $this->Form->submit('Gravar');
$form .= $this->Form->end(); //Finaliza

echo $this->Html->tag('h1', 'Novo Filme');
echo $form;

?>