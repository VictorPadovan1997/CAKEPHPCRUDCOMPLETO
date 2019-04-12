<?php
App::uses('AppModel', 'Model');

class Ator extends AppModel {

        public $validate = array(
            'nome' => array('rule' => 'notBlank', 'message' => 'Informe o nome' ),
            'datanascimento' => array('rule' => 'notBlank', 'message' => 'Informe a data' )
            
        );
}


?>