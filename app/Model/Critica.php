<?php
App::uses('AppModel', 'Model');

class Critica extends AppModel {
    public $hasMany = array(
        'Filme'
    );
}


?>