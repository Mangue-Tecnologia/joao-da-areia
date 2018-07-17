<?php

App::uses('AppController', 'Controller');

class LoginController extends AppController {

    public $components = array('RequestHandler');
    public $helpers = array('Js');

    public function index() {
        
        $this->layout="login";

        $login = $this->Session->read('Auth');

        if(!empty($login)){
            return $this->redirect(array('controller' => 'dashboard', 'action' => 'index'));
        } 

        if ($this->request->is('post')) {


            if ($this->Auth->login()) {
                return $this->redirect(array('controller' => 'dashboard', 'action' => 'index'));
            } else {
                $this->Session->setFlash('O Login ou a Senha estão errados, tente novamente', 'flash_error');
                return $this->redirect(array('controller' => 'login', 'action' => 'index'));
            }
        }

    }

    public function recuperar(){

    }

    public function reset(){

    }

    public function logout(){

        return $this->redirect($this->Auth->logout());

    }

}