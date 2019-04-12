<?php


App:: uses('AppController', 'Controller');

class CriticasController extends AppController {
    public function index(){
     $fields = array('Critica.nome', 'Critica.avaliacao', 'Critica.data_avaliacao', 'Critica.filme_id');
     $order = array('Critica.nome' => 'asc');
     $group = array();
     $conditions = array();
     $criticas = $this->Critica->find('all', compact('fields', 'order', 'conditions'));
     $this->set('criticas', $criticas);
    }
  

  public function add(){
    //pr($this->request->data); ver as informações do request
    if (!empty($this->request->data)){
        $this->Critica->create();
    if ($this->Critica->save($this->request->data)){
        $this->Flash->set('Filme Gravado');
        $this->redirect('/Ators');
        } 
 }
 $fields  = array('Filme.id', 'Filme.nome');
 $filmes = $this->Critica->Filme->find('list', compact('fields'));
 $this->set('filmes', $filmes);
}
public function view($id = null){
  $fields  = array('Critica.id','Critica.nome', 'Critica.avaliacao');
  $conditions = array('Critica.id' => $id);
  $this->request->data = $this->Critica->find('first', compact('fields', 'conditions', 'critica'));

}
}

?>