<?php

App::uses('AppController', 'Controller');

class BannersController extends AppController {

    public $components = array('RequestHandler', 'Session', 'Imagens');
    public $helpers = array('Js');

    public $uses = array('Banners', 'Usuario');


    public function beforeFilter(){
        $login = $this->Session->read('Auth');

        if(empty($login)){
            return $this->redirect(array('controller' => 'login', 'action' => 'index'));
        } else {
            $this->set('Login', $this->Usuario->find('first', array('conditions'=>array('Usuario.id'=>$login['User']['id']))));
        }
    }

    
    public function index() {

        $this->set('Items', $this->Banners->find('all', array('order' => array('ordem ASC'))));

    }

    public function adicionar(){

        $crop = str_replace(',', '.', Configure::read('banner_largura') / Configure::read('banner_altura'));

        $array_crop = array(
            'crop' => $crop,
            'largura' => Configure::read('banner_largura'),
            'altura' => Configure::read('banner_altura')
        );

        $this->set('crop', $array_crop);

    	if ($this->request->is('post')) {
    		
    		$titulo = $this->request->data['titulo'];
    		$imagem = $this->request->data['imagem'];

    		if (!empty($titulo) and !empty($imagem)) {

    			$extensao = explode('.', $imagem['name']);

                $extensao = strtolower(end($extensao));

    			if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {
    				$check = 0;

    				while ($check == 0) {

    					$path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

    					$list = $this->Banners->find('first', array('conditions'=>array('Banners.imagem'=>$path)));

    					if (count($list) == 0 ) {
    						$check = 1;
    						break;
    					}

    				}


    				$this->request->data['titulo'] = $titulo;
    				$this->request->data['imagem'] = $path;
                    $this->request->data['ordem'] = count($this->Banners->find('all')) + 1;

    				if($this->Banners->save($this->request->data)) {


                        $dir = Configure::read('path_to_save').'img/banners'.DS;

                        // executa o crop e salva a imagem

                        $largura = Configure::read('banner_largura');
                        $altura = Configure::read('banner_altura');
                            
                        $proporcao = str_replace(',', '.', Configure::read('banner_largura') / 600);

                        $x = str_replace(',', '.', $this->request->data['x1'] * $proporcao);
                        $y = str_replace(',', '.', $this->request->data['y1'] * $proporcao);
                        $w = str_replace(',', '.', $this->request->data['w'] * $proporcao);
                        $h = str_replace(',', '.', $this->request->data['h'] * $proporcao);

                        $this->Imagens->imagem_maior($dir, $x, $y, $w, $h, $largura, $altura, $imagem['tmp_name'] , $path, $extensao);

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

    	$item = $this->Banners->find('first', array('conditions' => array('Banners.id' => $id)));

    	if (!empty($item)) {

    		$this->set('item', $item);

            $crop = str_replace(',', '.', Configure::read('banner_largura') / Configure::read('banner_altura'));

            $array_crop = array(
                'crop' => $crop,
                'largura' => Configure::read('banner_largura'),
                'altura' => Configure::read('banner_altura')
            );

            $this->set('crop', $array_crop);

    		if ($this->request->is('post')) {

    			$titulo = $this->request->data['titulo'];
    			$subtitulo = $this->request->data['subtitulo'];
    			$imagem = $this->request->data['imagem'];
    			$status = $this->request->data['status'];
                $link = $this->request->data['url'];

    			if (!empty($titulo)) {

    				if (!empty($imagem['name'])) {

    					$extensao = explode('.', $imagem['name']);

                        $extensao = strtolower(end($extensao));

    					if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {

    						$check = 0;

    						while ($check == 0) {

    							$path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

    							$list = $this->Banners->find('first', array('conditions'=>array('Banners.imagem'=>$path)));

    							if (count($list) == 0 ) {
    								$check = 1;
    								break;
    							}

    						}

    						$this->request->data['imagem'] = $path;

    						$imagem_antiga = $item['Banners']['imagem'];

    					} else {
    						$this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
    					}
    				
    				} else {
                        $this->request->data['imagem'] = $item['Banners']['imagem'];
                    }

    				$this->request->data['titulo'] = $titulo;
    				$this->request->data['subtitulo'] = $subtitulo;
    				$this->request->data['id'] = $id;
    				$this->request->data['ativo'] = $status;
                    $this->request->data['url'] = $link;
    				
    				if($this->Banners->save($this->request->data)) {

    					if (!empty($imagem['name'])) {

                            $dir = Configure::read('path_to_save').'img/banners'.DS;
    						unlink($dir.$imagem_antiga);

    						// executa o crop e salva a imagem

    						$largura = Configure::read('banner_largura');
                            $altura = Configure::read('banner_altura');
    						
                            $proporcao = str_replace(',', '.', Configure::read('banner_largura') / 600);

    						$x = str_replace(',', '.', $this->request->data['x1'] * $proporcao);
                            $y = str_replace(',', '.', $this->request->data['y1'] * $proporcao);
                            $w = str_replace(',', '.', $this->request->data['w'] * $proporcao);
                            $h = str_replace(',', '.', $this->request->data['h'] * $proporcao);

    						$this->Imagens->imagem_maior($dir, $x, $y, $w, $h, $largura, $altura, $imagem['tmp_name'] , $path, $extensao);

    					}

    					$this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/banners/editar/'.$id);
    				
    				} else {
    					$this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
    				}

    			} else {
    				$this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
    			}

    		}

    	} else {
    		return $this->redirect(array('controller' => 'banners', 'action' => 'index'));
    	}

    }

    public function remover(){

    	$id = $this->request->params['id'];

    	$item = $this->Banners->find('first', array('conditions' => array('Banners.id' => $id)));

    	if (!empty($item)) {

    		$path = $item['Banners']['imagem'];
    		
    		$this->request->data['id'] = $id;

            if($this->Banners->delete($this->request->data)){

                $dir = Configure::read('path_to_save').'img/banners'.DS;
            	unlink($dir.$path);

            	$this->Session->setFlash('item deletado com sucesso!','flash_success');
            	return $this->redirect(array('controller' => 'banners', 'action' => 'index'));
            
            } else {

            	$this->Session->setFlash('Aconteceu um erro..','flash_error');
            	return $this->redirect(array('controller' => 'banners', 'action' => 'index'));
            }
        
        } else {

    		$this->Session->setFlash('Aconteceu um erro...','flash_error');
            return $this->redirect(array('controller' => 'banners', 'action' => 'index'));
    	}

    }

    public function ordem(){
        
        $this->set('items', $this->Banners->find('all', array('order' => array('ordem ASC'))));

        if ($this->request->is('post')) {

            $array_ordem = $this->request->data['ordem'];

            foreach ($array_ordem as $key => $value) {
                
                $this->request->data['id'] = $value;

                $this->request->data['ordem'] = $key + 1;

                $this->Banners->save($this->request->data);

            }

            $this->Session->setFlash('Salvo com sucesso','flash_success');

            $this->redirect('/banners/ordem/');

        }

    }


}