<?php

App::uses('AppModel', 'Model');

class Genero extends AppModel {

    public $belongsTO = array(
        'Genero'
    );
    
    public $validate = array(
        'genero' => array('rule' => 'notBlank', 'message' => 'Campo Obrigatorio' )
        
        
    );
}

?>