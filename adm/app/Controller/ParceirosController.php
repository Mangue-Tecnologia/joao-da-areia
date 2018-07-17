<?php

App::uses('AppController', 'Controller');

class ParceirosController extends AppController {

    public $components = array('RequestHandler', 'Session', 'Imagens');
    public $helpers = array('Js');

    public $uses = array('Parceiros', 'Usuario');


    public function beforeFilter(){
        $login = $this->Session->read('Auth');

        if(empty($login)){
            return $this->redirect(array('controller' => 'login', 'action' => 'index'));
        } else {
            $this->set('Login', $this->Usuario->find('first', array('conditions'=>array('Usuario.id'=>$login['User']['id']))));
        }
    }

    
    public function index() {

        $this->set('Items', $this->Parceiros->find('all', array('order' => array('ordem ASC'))));

    }

    public function adicionar(){

    	if ($this->request->is('post')) {
    		
    		$nome = $this->request->data['nome'];
    		$link = $this->request->data['link'];
    		$imagem = $this->request->data['imagem'];

    		if (!empty($nome) and !empty($imagem)) {

    			$extensao = explode('.', $imagem['name']);

                $extensao = strtolower(end($extensao));

    			if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {
    				$check = 0;

    				while ($check == 0) {

    					$path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

    					$list = $this->Parceiros->find('first', array('conditions'=>array('Parceiros.imagem'=>$path)));

    					if (count($list) == 0 ) {
    						$check = 1;
    						break;
    					}

    				}


    				$this->request->data['nome'] = $nome;
    				$this->request->data['imagem'] = $path;
    				$this->request->data['link'] = $link;
                    $this->request->data['ordem'] = count($this->Parceiros->find('all')) + 1;
					$this->request->data['status'] = 1;


    				if($this->Parceiros->save($this->request->data)) {

                        $dir = Configure::read('path_to_save').'img/parceiros'.DS;

                        move_uploaded_file($imagem['tmp_name'], $dir.$path);

    					$this->Session->setFlash('Salvo com sucesso','flash_success');

    				} else {
    					$this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
    				}

    			} else {
    				$this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
    			}

    		
    		} else {
    			$this->Session->setFlash('Os campos não podem ficar vazios !','flash_error');
    		}
    	}

    }

    public function editar(){

    	$id = $this->request->params['id'];

    	$item = $this->Parceiros->find('first', array('conditions' => array('Parceiros.id' => $id)));

    	if (!empty($item)) {

    		$this->set('item', $item);

    		if ($this->request->is('post')) {

    			$nome = $this->request->data['nome'];
    			$link = $this->request->data['link'];
    			$imagem = $this->request->data['imagem'];
    			$status = $this->request->data['status'];

    			if (!empty($nome)) {

    				if (!empty($imagem['name'])) {

    					$extensao = explode('.', $imagem['name']);

                        $extensao = strtolower(end($extensao));

    					if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {

    						$check = 0;

    						while ($check == 0) {

    							$path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

    							$list = $this->Parceiros->find('first', array('conditions'=>array('Parceiros.imagem'=>$path)));

    							if (count($list) == 0 ) {
    								$check = 1;
    								break;
    							}

    						}

    						$this->request->data['imagem'] = $path;

    						$imagem_antiga = $item['Parceiros']['imagem'];

    					} else {
    						$this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
    					}
    				
    				} else {
                        $this->request->data['imagem'] = $item['Parceiros']['imagem'];
                    }

    				$this->request->data['nome'] = $nome;
    				$this->request->data['link'] = $link;
    				$this->request->data['id'] = $id;
    				$this->request->data['status'] = $status;
    				
    				if($this->Parceiros->save($this->request->data)) {

    					if (!empty($imagem['name'])) {

                            $dir = Configure::read('path_to_save').'img/parceiros'.DS;
    						unlink($dir.$imagem_antiga);

    						move_uploaded_file($imagem['tmp_name'], $dir.$path);


    					}

    					$this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/paginas/parceiros/editar/'.$id);
    				
    				} else {
    					$this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
    				}

    			} else {
    				$this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
    			}

    		}

    	} else {
    		return $this->redirect(array('controller' => 'parceiros', 'action' => 'index'));
    	}

    }

    public function remover(){

    	$id = $this->request->params['id'];

    	$item = $this->Parceiros->find('first', array('conditions' => array('Parceiros.id' => $id)));

    	if (!empty($item)) {

    		$path = $item['Parceiros']['imagem'];
    		
    		$this->request->data['id'] = $id;

            if($this->Parceiros->delete($this->request->data)){

                $dir = Configure::read('path_to_save').'img/parceiros'.DS;
            	unlink($dir.$path);

            	$this->Session->setFlash('item deletado com sucesso!','flash_success');
            	return $this->redirect(array('controller' => 'parceiros', 'action' => 'index'));
            
            } else {

            	$this->Session->setFlash('Aconteceu um erro...!','flash_error');
            	return $this->redirect(array('controller' => 'parceiros', 'action' => 'index'));
            }
        
        } else {

    		$this->Session->setFlash('Aconteceu um erro...!','flash_error');
            return $this->redirect(array('controller' => 'parceiros', 'action' => 'index'));
    	}

    }

    public function ordem(){
        
        $this->set('items', $this->Parceiros->find('all', array('order' => array('ordem ASC'))));

        if ($this->request->is('post')) {

            $array_ordem = $this->request->data['ordem'];

            foreach ($array_ordem as $key => $value) {
                
                $this->request->data['id'] = $value;

                $this->request->data['ordem'] = $key + 1;

                $this->Parceiros->save($this->request->data);

            }

            $this->Session->setFlash('Salvo com sucesso','flash_success');

            $this->redirect('/paginas/parceiros/ordem/');

        }

    }


}