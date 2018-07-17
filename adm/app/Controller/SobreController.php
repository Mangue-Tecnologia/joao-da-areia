<?php

App::uses('AppController', 'Controller');

class SobreController extends AppController {

    public $components = array('RequestHandler', 'Session', 'Imagens');
    public $helpers = array('Js');

    public $uses = array('Sobre', 'Usuario', 'GaleriaSobre');


    public function beforeFilter(){

        $login = $this->Session->read('Auth');

        if(empty($login)){
            return $this->redirect(array('controller' => 'login', 'action' => 'index'));
        } else {
            $this->set('Login', $this->Usuario->find('first', array('conditions'=>array('Usuario.id' => $login['User']['id']))));
        }

    }

    
    public function index() {

        $this->set('Items', $this->Sobre->find('all', array('order' => array('id DESC'))));

    }

    public function texto_editar(){

        $id = $this->request->params['id'];

        $item = $this->Sobre->find('first', array('conditions' => array('Sobre.id' => $id)));

        if (!empty($item)) {

            $this->set('item', $item);

            $this->set('largura', Configure::read('sobre_largura'));

            if ($this->request->is('post')) {

                $texto = $this->request->data['texto'];
                $imagem = $this->request->data['imagem'];

                if (!empty($texto)) {

                    if (!empty($imagem['name'])) {

                        $tmp = explode(".", $imagem['name']);
                        $extensao = strtolower(end($tmp));

                        if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {

                            $check = 0;

                            while ($check == 0) {

                                $path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

                                $list = $this->Sobre->find('first', array('conditions'=>array('Sobre.imagem'=>$path)));

                                if (count($list) == 0 ) {
                                    $check = 1;
                                    break;
                                }

                            }

                            $this->request->data['imagem'] = $path;

                            $imagem_antiga = $item['Sobre']['imagem'];

                        } else {
                            $this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
                        }
                    
                    } else {
                        $this->request->data['imagem'] = $item['Sobre']['imagem'];
                    }

                    $this->request->data['texto'] = $texto;
                    $this->request->data['id'] = $id;
                    
                    if($this->Sobre->save($this->request->data)) {

                        if (!empty($imagem['name'])) {
                            
                            $dir = Configure::read('path_to_save').'img/sobre/'.DS;
                            unlink($dir.$imagem_antiga);

                            move_uploaded_file($imagem['tmp_name'], $dir.$path);

                        }

                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/sobre/textos/editar/'.$id);
                    
                    } else {
                        $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                    }

                } else {
                    $this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
                }

            }

        } else {
            return $this->redirect(array('controller' => 'sobre', 'action' => 'index'));
        }

    }

    public function galeria() {

        $this->set('Items', $this->GaleriaSobre->find('all', array('order' => array('id DESC'))));

    }

    public function galeria_adicionar(){

        $this->set('largura', Configure::read('galeria_sobre_largura'));

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

                        $list = $this->GaleriaSobre->find('first', array('conditions'=>array('GaleriaSobre.imagem'=>$path)));

                        if (count($list) == 0 ) {
                            $check = 1;
                            break;
                        }

                    }


                    $this->request->data['nome'] = $titulo;
                    $this->request->data['imagem'] = $path;

                    if($this->GaleriaSobre->save($this->request->data)) {

                        $dir = Configure::read('path_to_save').'img/galeria/sobre/'.DS;

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

    public function galeria_editar(){

        $id = $this->request->params['id'];

        $item = $this->GaleriaSobre->find('first', array('conditions' => array('GaleriaSobre.id' => $id)));

        if (!empty($item)) {

            $this->set('item', $item);

            $this->set('largura', Configure::read('galeria_sobre_largura'));

            if ($this->request->is('post')) {

                $titulo = $this->request->data['titulo'];
                $imagem = $this->request->data['imagem'];

                if (!empty($titulo)) {

                    if (!empty($imagem['name'])) {

                        $tmp = explode(".", $imagem['name']);
                        $extensao = strtolower(end($tmp));

                        if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {

                            $check = 0;

                            while ($check == 0) {

                                $path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

                                $list = $this->GaleriaSobre->find('first', array('conditions'=>array('GaleriaSobre.imagem'=>$path)));

                                if (count($list) == 0 ) {
                                    $check = 1;
                                    break;
                                }

                            }

                            $this->request->data['imagem'] = $path;

                            $imagem_antiga = $item['GaleriaSobre']['imagem'];

                        } else {
                            $this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
                        }
                    
                    } else {
                        $this->request->data['imagem'] = $item['GaleriaSobre']['imagem'];
                    }

                    $this->request->data['nome'] = $titulo;
                    $this->request->data['id'] = $id;
                    
                    if($this->GaleriaSobre->save($this->request->data)) {

                        if (!empty($imagem['name'])) {
                            
                            $dir = Configure::read('path_to_save').'img/galeria/sobre/'.DS;
                            unlink($dir.$imagem_antiga);

                            move_uploaded_file($imagem['tmp_name'], $dir.$path);

                        }

                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/sobre/galeria/editar/'.$id);
                    
                    } else {
                        $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                    }

                } else {
                    $this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
                }

            }

        } else {
            return $this->redirect(array('controller' => 'sobre', 'action' => 'galeria'));
        }

    }

    public function galeria_remover(){

        $id = $this->request->params['id'];

        $item = $this->GaleriaSobre->find('first', array('conditions' => array('GaleriaSobre.id' => $id)));

        if (!empty($item)) {

            $path = $item['GaleriaSobre']['imagem'];
            
            $this->request->data['id'] = $id;

            if($this->GaleriaSobre->delete($this->request->data)){

                $dir = Configure::read('path_to_save').'img/galeria/sobre/'.DS;
                unlink($dir.$path);

                $this->Session->setFlash('item deletado com sucesso!','flash_success');
                return $this->redirect(array('controller' => 'sobre', 'action' => 'galeria'));
            
            } else {

                $this->Session->setFlash('Aconteceu um erro...!','flash_error');
                return $this->redirect(array('controller' => 'sobre', 'action' => 'galeria'));
            }
        
        } else {

            $this->Session->setFlash('Aconteceu um erro...!','flash_error');
            return $this->redirect(array('controller' => 'sobre', 'action' => 'galeria'));
        }

    }


}