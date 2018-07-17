<?php

App::uses('AppController', 'Controller');

class PerfilController extends AppController {

    public $components = array('RequestHandler', 'Session', 'Imagens');
    public $helpers = array('Js');

    public $uses = array('Usuario');


    public function beforeFilter(){

        $login = $this->Session->read('Auth');

        if(empty($login)){
            return $this->redirect(array('controller' => 'login', 'action' => 'index'));
        } else {
            $this->set('Login', $this->Usuario->find('first', array('conditions'=>array('Usuario.id' => $login['User']['id']))));
        }

    }

    public function index(){

        $login = $this->Session->read('Auth');

        $item = $this->Usuario->find('first', array('conditions' => array('Usuario.id' => $login['User']['id'])));

        $this->set('item', $item);

        if ($this->request->is('post')) {

            $nome = $this->request->data['nome'];
            $imagem = $this->request->data['imagem'];

            if (!empty($nome)) {

                if (!empty($imagem['name'])) {

                    $tmp = explode(".", $imagem['name']);
                    $extensao = strtolower(end($tmp));

                    if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {

                        $check = 0;

                        while ($check == 0) {

                            $path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

                            $list = $this->Usuario->find('first', array('conditions'=>array('Usuario.imagem'=>$path)));

                            if (count($list) == 0 ) {
                                $check = 1;
                                break;
                            }

                        }

                        $this->request->data['imagem'] = $path;

                        $imagem_antiga = $item['Usuario']['imagem'];

                    } else {
                        $this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
                    }
                
                } else {
                    $this->request->data['imagem'] = $item['Usuario']['imagem'];
                }

                $this->request->data['nome'] = $nome;
                $this->request->data['id'] = $login['User']['id'];
                
                if($this->Usuario->save($this->request->data)) {

                    if (!empty($imagem['name'])) {
                        
                        $dir = 'img/usuario/'.DS;

                        if ($imagem_antiga != "default.jpg") {
                            unlink($dir.$imagem_antiga);
                        }

                        move_uploaded_file($imagem['tmp_name'], $dir.$path);

                    }

                    $this->Session->setFlash('Salvo com sucesso','flash_success');

                    $this->redirect('/perfil');
                
                } else {
                    $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                }

            } else {
                $this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
            }

        }
    }


}