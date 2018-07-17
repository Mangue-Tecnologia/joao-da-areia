<?php

App::uses('AppController', 'Controller');

class ServicosController extends AppController {

    public $components = array('RequestHandler', 'Session', 'Imagens');
    public $helpers = array('Js');

    public $uses = array('Usuario', 'Servicos');


    public function beforeFilter(){

        $login = $this->Session->read('Auth');

        if(empty($login)){
            return $this->redirect(array('controller' => 'login', 'action' => 'index'));
        } else {
            $this->set('Login', $this->Usuario->find('first', array('conditions'=>array('Usuario.id'=>$login['User']['id']))));
        }
    }


    public function index(){

        $this->set('Items', $this->Servicos->find('all', array('order' => array('Servicos.ordem ASC'))));

    }

    public function adicionar(){

        $crop = str_replace(',', '.', Configure::read('servicos_largura') / Configure::read('servicos_altura'));

        $array_crop = array(
            'crop' => $crop,
            'largura' => Configure::read('servicos_largura'),
            'altura' => Configure::read('servicos_altura')
        );

        $this->set('crop', $array_crop);

        if ($this->request->is('post')) {
            
            $nome = $this->request->data['nome'];
			$texto = $this->request->data['texto'];
            $imagem = $this->request->data['imagem'];

            if (!empty($nome) and !empty($imagem)) {

                // salvar uma slug

                $extensao = explode('.', $imagem['name']);

                $extensao = strtolower(end($extensao));

                if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {
                    $check = 0;

                    while ($check == 0) {

                        $path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

                        $list = $this->Servicos->find('first', array('conditions'=>array('Servicos.imagem'=>$path)));

                        if (count($list) == 0 ) {
                            $check = 1;
                            break;
                        }

                    }

                    $this->request->data['imagem'] = $path;
                    $this->request->data['nome'] = $nome;
					$this->request->data['texto'] = $texto;
                    $this->request->data['ordem'] = count($this->Servicos->find('all')) + 1;

                    if($this->Servicos->save($this->request->data)) {
                        
                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $dir = Configure::read('path_to_save').'img/servicos'.DS;

                        // executa o crop e salva a imagem

                        $largura = Configure::read('servicos_largura');
                        $altura = Configure::read('servicos_altura');
                        

                        $x = str_replace(',', '.', $this->request->data['x1']);
                        $y = str_replace(',', '.', $this->request->data['y1']);
                        $w = str_replace(',', '.', $this->request->data['w']);
                        $h = str_replace(',', '.', $this->request->data['h']);

                        $this->Imagens->tratamento($dir, $x, $y, $w, $h, $largura, $altura, $imagem['tmp_name'] , $path, $extensao);

                    } else {
                        $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                    }

                } else {
                    $this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
                }    

            } else {
                $this->Session->setFlash('Os campos não podem ficar vazios!','flash_error');
            }
        }

    }

    public function editar(){

        $id = $this->request->params['id'];

        $item = $this->Servicos->find('first', array('conditions' => array('Servicos.id' => $id)));

        if (!empty($item)) {

            $this->set('item', $item);

            $crop = str_replace(',', '.', Configure::read('servicos_largura') / Configure::read('servicos_altura'));

            $array_crop = array(
                'crop' => $crop,
                'largura' => Configure::read('servicos_largura'),
                'altura' => Configure::read('servicos_altura')
            );

            $this->set('crop', $array_crop);

            if ($this->request->is('post')) {

                $nome = $this->request->data['nome'];
                $imagem = $this->request->data['imagem'];
				$texto = $this->request->data['texto'];

                if (!empty($nome)) {

                    if (!empty($imagem['name'])) {

                        $extensao = explode('.', $imagem['name']);

                        $extensao = strtolower(end($extensao));

                        if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {

                            $check = 0;

                            while ($check == 0) {

                                $path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

                                $list = $this->Servicos->find('first', array('conditions'=>array('Servicos.imagem'=>$path)));

                                if (count($list) == 0 ) {
                                    $check = 1;
                                    break;
                                }

                            }

                            $this->request->data['imagem'] = $path;

                            $imagem_antiga = $item['Servicos']['imagem'];

                        } else {
                            $this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
                        }
                    
                    } else {
                        $this->request->data['imagem'] = $item['Servicos']['imagem'];
                    }

                    $this->request->data['nome'] = $nome;
					$this->request->data['texto'] = $texto;
                    $this->request->data['id'] = $id;

                    if($this->Servicos->save($this->request->data)) {

                        if (!empty($imagem['name'])) {

                            $dir = Configure::read('path_to_save').'img/servicos'.DS;
                            unlink($dir.$imagem_antiga);

                            // executa o crop e salva a imagem

                            $largura = Configure::read('servicos_largura');
                            $altura = Configure::read('servicos_altura');
                            
                            $proporcao = str_replace(',', '.', Configure::read('servicos_largura') / 400);

                            $x = str_replace(',', '.', $this->request->data['x1']);
                            $y = str_replace(',', '.', $this->request->data['y1']);
                            $w = str_replace(',', '.', $this->request->data['w']);
                            $h = str_replace(',', '.', $this->request->data['h']);

                            $this->Imagens->imagem_maior($dir, $x, $y, $w, $h, $largura, $altura, $imagem['tmp_name'] , $path, $extensao);

                        }

                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/paginas/servicos/editar/'.$id);
                    
                    } else {
                        $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                    }

                } else {
                    $this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
                }

            }

        } else {
            return $this->redirect(array('controller' => 'servicos', 'action' => 'index'));
        }

    }

    public function remover(){

        $id = $this->request->params['id'];

        $item = $this->Servicos->find('first', array('conditions' => array('Servicos.id' => $id)));

        if (!empty($item)) {

            $path = $item['Servicos']['imagem'];
            
            $this->request->data['id'] = $id;

            if($this->Servicos->delete($this->request->data)){

                $dir = Configure::read('path_to_save').'img/servicos'.DS;
                unlink($dir.$path);

                $this->Session->setFlash('item deletado com sucesso!','flash_success');
                return $this->redirect(array('controller' => 'servicos', 'action' => 'index'));
            
            } else {

                $this->Session->setFlash('Aconteceu um erro...','flash_error');
                return $this->redirect(array('controller' => 'servicos', 'action' => 'index'));
            }
        
        } else {

            $this->Session->setFlash('Aconteceu um erro...','flash_error');
            return $this->redirect(array('controller' => 'servicos', 'action' => 'index'));
        }

    }

    public function ordem(){
        
        $this->set('items', $this->Servicos->find('all', array('order' => array('ordem ASC'))));

        if ($this->request->is('post')) {

            $array_ordem = $this->request->data['ordem'];

            foreach ($array_ordem as $key => $value) {
                
                $this->request->data['id'] = $value;

                $this->request->data['ordem'] = $key + 1;

                $this->Servicos->save($this->request->data);

            }

            $this->Session->setFlash('Salvo com sucesso','flash_success');

            $this->redirect('/paginas/servicos/ordem/');

        }

    }

}