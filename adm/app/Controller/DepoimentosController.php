<?php

App::uses('AppController', 'Controller');

class DepoimentosController extends AppController {

    public $components = array('RequestHandler', 'Session', 'Imagens');
    public $helpers = array('Js');

    public $uses = array('Usuario', 'Depoimentos');


    public function beforeFilter(){

        $login = $this->Session->read('Auth');

        if(empty($login)){
            return $this->redirect(array('controller' => 'login', 'action' => 'index'));
        } else {
            $this->set('Login', $this->Usuario->find('first', array('conditions'=>array('Usuario.id'=>$login['User']['id']))));
        }
    }


    public function index(){

        $this->set('Items', $this->Depoimentos->find('all', array('order' => array('Depoimentos.id DESC'))));

    }

    public function adicionar(){

        if ($this->request->is('post')) {
            
            $nome = $this->request->data['nome'];
            $texto = $this->request->data['texto'];
            $funcao = $this->request->data['funcao'];
            $imagem = $this->request->data['imagem'];

            if (!empty($nome) and !empty($texto) and !empty($funcao) and !empty($imagem)) {

                // salvar uma slug

                $extensao = explode('.', $imagem['name']);

                $extensao = strtolower(end($extensao));

                if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {
                    $check = 0;

                    while ($check == 0) {

                        $path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

                        $list = $this->Depoimentos->find('first', array('conditions'=>array('Depoimentos.imagem'=>$path)));

                        if (count($list) == 0 ) {
                            $check = 1;
                            break;
                        }

                    }

                    $this->request->data['imagem'] = $path;
                    $this->request->data['nome'] = $nome;
                    $this->request->data['texto'] = $texto;
                    $this->request->data['funcao'] = $funcao;

                    if($this->Depoimentos->save($this->request->data)) {
                        
                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $largura = Configure::read('depoimentos');

                        $dir = Configure::read('path_to_save').'img/depoimentos'.DS;

                        move_uploaded_file($imagem['tmp_name'], $dir.$path);

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

        $item = $this->Depoimentos->find('first', array('conditions' => array('Depoimentos.id' => $id)));

        if (!empty($item)) {

            $this->set('item', $item);

            if ($this->request->is('post')) {

                $nome = $this->request->data['nome'];
                $texto = $this->request->data['texto'];
                $funcao = $this->request->data['funcao'];
                $imagem = $this->request->data['imagem'];

                if (!empty($nome) and !empty($texto) and !empty($funcao)) {

                    if (!empty($imagem['name'])) {

                        $extensao = explode('.', $imagem['name']);

                        $extensao = strtolower(end($extensao));

                        if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {

                            $check = 0;

                            while ($check == 0) {

                                $path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

                                $list = $this->Depoimentos->find('first', array('conditions'=>array('Depoimentos.imagem'=>$path)));

                                if (count($list) == 0 ) {
                                    $check = 1;
                                    break;
                                }

                            }

                            $this->request->data['imagem'] = $path;

                            $imagem_antiga = $item['Depoimentos']['imagem'];

                        } else {
                            $this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
                        }
                    
                    } else {
                        $this->request->data['imagem'] = $item['Depoimentos']['imagem'];
                    }

                    $this->request->data['nome'] = $nome;
                    $this->request->data['texto'] = $texto;
                    $this->request->data['funcao'] = $funcao;
                    $this->request->data['id'] = $id;

                    if($this->Depoimentos->save($this->request->data)) {

                        if (!empty($imagem['name'])){
                            
                            $dir = Configure::read('path_to_save').'img/depoimentos'.DS;
                            unlink($dir.$imagem_antiga);

                            move_uploaded_file($imagem['tmp_name'], $dir.$path);
                        }

                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/depoimentos/editar/'.$id);
                    
                    } else {
                        $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                    }

                } else {
                    $this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
                }

            }

        } else {
            return $this->redirect(array('controller' => 'depoimentos', 'action' => 'index'));
        }

    }

    public function remover(){

        $id = $this->request->params['id'];

        $item = $this->Depoimentos->find('first', array('conditions' => array('Depoimentos.id' => $id)));

        if (!empty($item)) {

            $path = $item['Depoimentos']['imagem'];
            
            $this->request->data['id'] = $id;

            if($this->Depoimentos->delete($this->request->data)){

                $dir = Configure::read('path_to_save').'img/depoimentos'.DS;
                unlink($dir.$path);

                $this->Session->setFlash('item deletado com sucesso!','flash_success');
                return $this->redirect(array('controller' => 'depoimentos', 'action' => 'index'));
            
            } else {

                $this->Session->setFlash('Aconteceu um erro...!','flash_error');
                return $this->redirect(array('controller' => 'depoimentos', 'action' => 'index'));
            }
        
        } else {

            $this->Session->setFlash('Aconteceu um erro...!','flash_error');
            return $this->redirect(array('controller' => 'depoimentos', 'action' => 'index'));
        }

    }

    // falta remover


}