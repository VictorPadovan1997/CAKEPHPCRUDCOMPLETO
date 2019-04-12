<?php

App::uses('AppModel', 'Model');

class Filme extends AppModel {

    public $hasAndBelongsToMany = array(
        'Ator'
    );

    public $hasMany = array(
        'Critica'
    );
    
    public $validate = array(
        'genero' => array('rule' => 'notBlank', 'message' => 'Campo Obrigatorio' )
        
        
    );
}

?>