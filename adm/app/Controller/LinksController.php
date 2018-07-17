<?php

App::uses('AppController', 'Controller');

class LinksController extends AppController {

    public $components = array('RequestHandler', 'Session', 'Imagens');
    public $helpers = array('Js');

    public $uses = array('Links', 'Usuario');


    public function beforeFilter(){

        $login = $this->Session->read('Auth');

        if(empty($login)){
            return $this->redirect(array('controller' => 'login', 'action' => 'index'));
        } else {
            $this->set('Login', $this->Usuario->find('first', array('conditions'=>array('Usuario.id'=>$login['User']['id']))));
        }
    
    }

    
    public function index() {

        $this->set('Items', $this->Links->find('all', array('order' => array('ordem ASC'))));

    }

    public function adicionar(){

    	if ($this->request->is('post')) {
    		
    		$nome = $this->request->data['nome'];
            $link = $this->request->data['url'];

    		if (!empty($link) AND !empty($nome)) {

                $this->request->data['nome'] = $nome;
                $this->request->data['link'] = $link;
                $this->request->data['ordem'] = count($this->Links->find('all')) + 1;

                if($this->Links->save($this->request->data)) {
                    $this->Session->setFlash('Salvo com sucesso','flash_success');
                } else {
                    $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                }

    		} else {
    			$this->Session->setFlash('Os campos não podem ficar vazios !','flash_error');
    		}
    	}

    }

    public function editar(){

    	$id = $this->request->params['id'];

    	$item = $this->Links->find('first', array('conditions' => array('Links.id' => $id)));

    	if (!empty($item)) {

    		$this->set('item', $item);

    		if ($this->request->is('post')) {

    			$nome = $this->request->data['nome'];
                $url = $this->request->data['url'];

    			if (!empty($nome) and !empty($url)) {

    				$this->request->data['nome'] = $nome;
                    $this->request->data['link'] = $url;
    				$this->request->data['id'] = $id;

    				if($this->Links->save($this->request->data)) {

    					$this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/paginas/links/editar/'.$id);
    				
    				} else {
    					$this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
    				}

    			} else {
    				$this->Session->setFlash('Os campos não podem ficar vazio!','flash_error');
    			}

    		}

    	} else {
    		return $this->redirect(array('controller' => 'newsletter', 'action' => 'index'));
    	}

    }

    public function remover(){

    	$id = $this->request->params['id'];

    	$item = $this->Links->find('first', array('conditions' => array('Links.id' => $id)));

    	if (!empty($item)) {

    		$this->request->data['id'] = $id;

            if($this->Links->delete($this->request->data)){

            	$this->Session->setFlash('item deletado com sucesso!','flash_success');
            	return $this->redirect(array('controller' => 'links', 'action' => 'index'));
            
            } else {

            	$this->Session->setFlash('Aconteceu um erro...','flash_error');
            	return $this->redirect(array('controller' => 'links', 'action' => 'index'));
            }
        
        } else {

    		$this->Session->setFlash('Aconteceu um erro...','flash_error');
            return $this->redirect(array('controller' => 'links', 'action' => 'index'));
    	}

    }

    public function ordem(){
        
        $this->set('items', $this->Links->find('all', array('order' => array('ordem ASC'))));

        if ($this->request->is('post')) {

            $array_ordem = $this->request->data['ordem'];

            foreach ($array_ordem as $key => $value) {
                
                $this->request->data['id'] = $value;

                $this->request->data['ordem'] = $key + 1;

                $this->Links->save($this->request->data);

            }

            $this->Session->setFlash('Salvo com sucesso','flash_success');

            $this->redirect('/paginas/links/ordem/');

        }

    }


}