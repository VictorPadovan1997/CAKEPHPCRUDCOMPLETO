<?php
App:: uses('AppController', 'Controller');

    class AtorsController extends AppController {
        public function index(){
          
        $fields     = array('Ator.id', 'Ator.nome', 'Ator.datanascimento');
        $order      = array('Ator.nome' => 'asc');
        $group      = array();
        $conditions = array();
        $atores     = $this->Ator->find('all', compact('fields', 'order', 'conditions'));
        $this->set('ators', $atores);
    }
       
        public function add(){
            //pr($this->request->data); ver as informações do request
            if (!empty($this->request->data)){
                $this->Ator->create();
            if ($this->Ator->save($this->request->data)){
                $this->Ator->set('Filme Gravado');
                $this->redirect('/Ators');
                }
            
         }
    }
        public function delete($id){
        $this->Ator->delete($id);
        $this->redirect('/ators');
    }
    public function view($id = null){
        $fields  = array('Ator.id','Ator.nome', 'Ator.datanascimento');
        $conditions = array('Ator.id' => $id);
        $this->request->data = $this->Ator->find('first', compact('fields', 'conditions', 'ator'));

    }

}
    


?>