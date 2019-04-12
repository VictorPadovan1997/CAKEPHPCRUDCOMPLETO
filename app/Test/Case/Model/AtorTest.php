<?php
    class AtorTest extends CakeTestCase {

        public $fixtures = array('app.ator');

        public function testExisteModel(){
            $filme = ClassRegistry::init('Ator');
            $this->assertTrue(is_a($filme, 'Ator'));
        }
        public function testNomeEmpty(){
            //PREPARAÇÃO
            $filme = ClassRegistry::init('Ator');
            $data = array('Ator' => array('nome' => null, 
            'between' => array(
                'rule' => array('lengthBetween', 5, 15),
                'message' => 'Between 5 to 15 characters'
            )) );
            $data2 = array('Ator' => array('datanascimento' => null) );



        //EXECUÇÃO
            $saved = $filme->save($data, $data2);

            //TESTE
            $this->assertFalse($saved);

        }
    }

?>