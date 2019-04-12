<?php

$form = $this->Form->create('Ator');
$form .= $this->Form->input('Ator.nome', array('required' => false));
$form .= $this->Form->input('Ator.datanascimento');
$form .= $this->Form->submit('Gravar');
$form .= $this->Form->end();
echo $this->Html->tag('h1', 'Novo Ator');
echo $form;

?>