<?php
    class CriticaTest extends CakeTestCase {

        public $fixtures = array('app.critica');
        public $Critica = null;

        public function setUp(){
            $this->Critica = ClassRegistry::init('Critica');
        }
        public function testExistModel(){
            $this->assertTrue(is_a($this->Critica, 'Critica'));
        }
    }
    

?>