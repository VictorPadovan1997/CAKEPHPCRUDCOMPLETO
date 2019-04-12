<?php

class AtorFixture extends CakeTestFixture {
    public $name = 'Ator';
    public $import = array('model' => 'Ator', 'records' => false);

    public function init(){
        $this->records = array(
        array('nome' => 'Victor', 'datanascimento' => '2019/02/02')
        );
        parent::init();
    }
}



?>