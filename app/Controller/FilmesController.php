<?php

App:: uses('AppController', 'Controller');

class FilmesController extends AppController {
    public function index(){

        $fields     = array ('Filme.id', 'Filme.nome', 'Filme.ano', 'Filme.duracao', 'Filme.idioma', 'Filme.genero');
        $order      = array ('Filme.nome' => 'asc');
        $group      = array();
        $conditions = array();
        $filmes     = $this->Filme->find('all', compact('fields', 'order', 'group', 'conditions'));

        $this->set('filmes', $filmes);
    }

    public function add(){
        //pr($this->request->data); ver as informações do request
        if (!empty($this->request->data)){
            $this->Filme->create();
        if ($this->Filme->save($this->request->data)){
            $this->Flash->set('Filme Gravado');
            $this->redirect('/Filmes');
            }
            //Salva as informações do request
        }
       
    }

    public function edit($id = NULL){
        if (!empty($this->request->data)){
            $this->Filme->create();
        if ($this->Filme->save($this->request->data)){
            $this->Flash->set('Filme Gravado');
            $this->redirect('/Filmes');
            }
            //Salva as informações do request
        }else {
            $fields  = array('Filme.id','Filme.nome', 'Filme.duracao', 'Filme.idioma', 'Filme.ano');
            $conditions = array('Filme.id' => $id);
            $this->request->data = $this->Filme->find('first', compact('fields', 'conditions', 'filme'));

        }
    }

    public function view($id = null){
        $fields  = array('Filme.id','Filme.nome', 'Filme.duracao', 'Filme.idioma', 'Filme.ano');
        $conditions = array('Filme.id' => $id);
        $this->request->data = $this->Filme->find('first', compact('fields', 'conditions', 'filme'));

    }
    public function delete($id){
        $this->Filme->delete($id);
        $this->redirect('/filmes');
    }

    public function addator(){
        
    }
}



?>