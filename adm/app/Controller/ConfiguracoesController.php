<?php

App::uses('AppController', 'Controller');

class ConfiguracoesController extends AppController {

    public $components = array('RequestHandler', 'Session', 'Imagens');
    public $helpers = array('Js');

    public $uses = array('Configuracoes', 'Usuario');

    public function beforeFilter(){

        $login = $this->Session->read('Auth');

        if(empty($login)){
            return $this->redirect(array('controller' => 'login', 'action' => 'index'));
        } else {
            $this->set('Login', $this->Usuario->find('first', array('conditions'=>array('Usuario.id'=>$login['User']['id']))));
        }
    }

    public function editar(){

        $item = $this->Configuracoes->find('first', array('conditions' => array('Configuracoes.id' => 1)));

        if (!empty($item)) {

            $this->set('item', $item);

            if ($this->request->is('post')) {

                $nome = $this->request->data['nome'];
                $descricao = $this->request->data['descricao'];
                $keywords = $this->request->data['keywords'];
                $email = $this->request->data['email'];
                $telefone = $this->request->data['telefone'];
                $horario = $this->request->data['horario'];

                $this->request->data['nome'] = $nome;
                $this->request->data['descricao'] = $descricao;
                $this->request->data['palavras_chave'] = $keywords;
                $this->request->data['email'] = $email;
                $this->request->data['telefone'] = $telefone;
                $this->request->data['horario'] = $horario;
                $this->request->data['id'] = 1;

                if($this->Configuracoes->save($this->request->data)) {

                    $this->Session->setFlash('Salvo com sucesso','flash_success');

                    $this->redirect('/configuracoes/');
                    
                } else {
                    $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                }

            }

        } else {
            return $this->redirect(array('controller' => 'dashboard', 'action' => 'index'));
        }

    }

}