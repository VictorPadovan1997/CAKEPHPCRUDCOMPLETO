<?php
    class AtorTest extends CakeTestCase {

        public $fixtures = array('app.filme');

        public function testExisteModel(){
            $filme = ClassRegistry::init('Filme');
            $this->assertTrue(is_a($filme, 'Ator'));
        }
        public function testDuracaoEmpty(){
            //PREPARAÇÃO
            $filme = ClassRegistry::init('Filme');
            $data = array('Filme' => array('genero' => null) );
        
        //EXECUÇÃO
            $saved = $filme->save($data);

            //TESTE
            $this->assertFalse($saved);

        }
    }

?>