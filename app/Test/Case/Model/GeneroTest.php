<?php
    class AtorTest extends CakeTestCase {

        public $fixtures = array('app.genero');

        public function testExisteModel(){
            $filme = ClassRegistry::init('Genero');
            $this->assertTrue(is_a($filme, 'Genero'));
        }
        public function testNomeEmpty(){
            //PREPARAÇÃO
            $filme = ClassRegistry::init('Genero');
            $data = array('Ator' => array('Genero' => null) );
            
        //EXECUÇÃO
            $saved = $filme->save($data);

            //TESTE
            $this->assertFalse($saved);

        }
    }

?>