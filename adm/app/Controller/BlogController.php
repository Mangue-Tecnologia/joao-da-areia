<?php

App::uses('AppController', 'Controller');

class BlogController extends AppController {

    public $components = array('RequestHandler', 'Session', 'Imagens');
    public $helpers = array('Js');

    public $uses = array('Blog', 'BlogCategorias', 'Usuario');


    public function beforeFilter(){

        $login = $this->Session->read('Auth');

        if(empty($login)){
            return $this->redirect(array('controller' => 'login', 'action' => 'index'));
        } else {
            $this->set('Login', $this->Usuario->find('first', array('conditions'=>array('Usuario.id' => $login['User']['id']))));
        }
    }

    public function index(){
        $this->set('Items', $this->Blog->find('all', array('Blog.order' => array('id DESC'))));
    }

    public function adicionar(){

        if ($this->request->is('post')) {
            $titulo = $this->request->data['titulo'];
            $keywords = $this->request->data['keywords'];
            $descricao_curta = $this->request->data['descricao_curta'];
            $texto = $this->request->data['texto'];
            $imagem = $this->request->data['imagem'];

            if (!empty($titulo) and !empty($imagem) and !empty($keywords)) {

                $extensao = explode('.', $imagem['name']);

                $extensao = strtolower(end($extensao));

                if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {

                    $check = 0;

                    while ($check == 0) {

                        $path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

                        $list = $this->Blog->find('first', array('conditions'=>array('Blog.imagem'=>$path)));

                        if (count($list) == 0 ) {
                            $check = 1;
                            break;
                        }

                    }


                    $this->request->data['titulo'] = $titulo;
                    $this->request->data['imagem'] = $path;
                    $this->request->data['keywords'] = $keywords;
                    $this->request->data['descricao_curta'] = $descricao_curta;
                    $this->request->data['texto'] = $texto;
                    $this->request->data['data'] = date('Y-m-d');
                    $this->request->data['slug'] = $this->gerar_slug($titulo);
                    $this->request->data['codigo'] = $this->gerar_codigo_blog();

                    if($this->Blog->save($this->request->data)) {
                        
                        $dir = Configure::read('path_to_save').'img/blog'.DS;

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

        $item = $this->Blog->find('first', array('conditions' => array('Blog.id' => $id)));

        if (!empty($item)) {

            $this->set('item', $item);

            if ($this->request->is('post')) {

                $titulo = $this->request->data['titulo'];   
                $keywords = $this->request->data['keywords'];
                $descricao_curta = $this->request->data['descricao_curta'];
                $texto = $this->request->data['texto'];
                $imagem = $this->request->data['imagem'];

                if (!empty($titulo) and !empty($keywords)) {

                    if (!empty($imagem['name'])) {

                        $extensao = explode('.', $imagem['name']);
                        $extensao = strtolower(end($extensao));

                        if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {

                            $check = 0;

                            while ($check == 0) {

                                $path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

                                $list = $this->Blog->find('first', array('conditions'=>array('Blog.imagem'=>$path)));

                                if (count($list) == 0 ) {
                                    $check = 1;
                                    break;
                                }

                            }

                            $this->request->data['imagem'] = $path;

                            $imagem_antiga = $item['Blog']['imagem'];

                        } else {
                            $this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
                        }
                    
                    } else {
                        $this->request->data['imagem'] = $item['Blog']['imagem'];
                    }

                    $this->request->data['titulo'] = $titulo;
                    $this->request->data['id'] = $id;
                    $this->request->data['keywords'] = $keywords;
                    $this->request->data['descricao_curta'] = $descricao_curta;
                    $this->request->data['texto'] = $texto;
                    $this->request->data['slug'] = $this->gerar_slug($titulo);

                    if($this->Blog->save($this->request->data)) {

                        if (!empty($imagem['name'])) {

                            $dir = Configure::read('path_to_save').'img/blog'.DS;
                            unlink($dir.$imagem_antiga);

                            move_uploaded_file($imagem['tmp_name'], $dir.$path);

                        }

                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/paginas/blog/editar/'.$id);
                    
                    } else {
                        $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                    }

                } else {
                    $this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
                }

            }

        } else {
            return $this->redirect(array('controller' => 'blog', 'action' => 'editar'));
        }

    }

    public function remover(){

        $id = $this->request->params['id'];

        $item = $this->Blog->find('first', array('conditions' => array('Blog.id' => $id)));

        if (!empty($item)) {

            $path = $item['Blog']['imagem'];
            
            $this->request->data['id'] = $id;

            if($this->Blog->delete($this->request->data)){

                $dir = Configure::read('path_to_save').'img/blog'.DS;
                unlink($dir.$path);

                $this->Session->setFlash('item deletado com sucesso!','flash_success');
                return $this->redirect(array('controller' => 'blog', 'action' => 'index'));
            
            } else {

                $this->Session->setFlash('Aconteceu um erro...','flash_error');
                return $this->redirect(array('controller' => 'blog', 'action' => 'index'));
            }
        
        } else {

            $this->Session->setFlash('Aconteceu um erro..','flash_error');
            return $this->redirect(array('controller' => 'blog', 'action' => 'index'));
        }

    }

    /* categorias */

    public function listar_categorias(){
        $this->set('Items', $this->BlogCategorias->find('all', array('conditions' => array('status' => 1), 'order' => array('id DESC'))));
    }

    public function adicionar_categoria(){

        if ($this->request->is('post')) {
            $nome = $this->request->data['nome'];

            if (!empty($nome)) {

                $this->request->data['nome'] = $nome;

                if($this->BlogCategorias->save($this->request->data)) {

                    $this->Session->setFlash('Salvo com sucesso','flash_success');

                } else {
                    $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                }
            } else {
                $this->Session->setFlash('Os campos não podem ficar vazios !','flash_error');
            }
        }

    }

    public function editar_categoria(){

        $id = $this->request->params['id'];

        $item = $this->BlogCategorias->find('first', array('conditions' => array('BlogCategorias.id' => $id)));

        if (!empty($item)) {

            $this->set('item', $item);

            if ($this->request->is('post')) {

                $nome = $this->request->data['nome'];   

                if (!empty($nome)) {

                    $this->request->data['nome'] = $nome;
                    $this->request->data['id'] = $id;

                    if($this->BlogCategorias->save($this->request->data)) {

                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/blog/editar_categoria/'.$id);
                    
                    } else {
                        $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                    }

                } else {
                    $this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
                }

            }

        } else {
            return $this->redirect(array('controller' => 'blog', 'action' => 'listar_categorias'));
        }

    }

    public function remover_categoria(){

        $id = $this->request->params['id'];

        $item = $this->BlogCategorias->find('first', array('conditions' => array('BlogCategorias.id' => $id)));

        if (!empty($item)) {
            
            $this->request->data['id'] = $id;
            $this->request->data['status'] = 0;

            if($this->BlogCategorias->save($this->request->data)){

                $this->Session->setFlash('item deletado com sucesso!','flash_success');
                return $this->redirect(array('controller' => 'blog', 'action' => 'listar_categorias'));
            
            } else {

                $this->Session->setFlash('Aconteceu um erro...!','flash_error');
                return $this->redirect(array('controller' => 'blog', 'action' => 'listar_categorias'));
            }
        
        } else {

            $this->Session->setFlash('Aconteceu um erro...!','flash_error');
            return $this->redirect(array('controller' => 'blog', 'action' => 'listar_categorias'));
        }

    }

     public function ordem_categoria(){
        
        $this->set('items', $this->BlogCategorias->find('all', array('conditions' => array('status' => 1),'order' => array('ordem ASC'))));

        if ($this->request->is('post')) {

            $array_ordem = $this->request->data['ordem'];

            foreach ($array_ordem as $key => $value) {
                
                $this->request->data['id'] = $value;

                $this->request->data['ordem'] = $key + 1;

                $this->BlogCategorias->save($this->request->data);

            }

            $this->Session->setFlash('Salvo com sucesso','flash_success');

            $this->redirect('/blog/categorias/ordem/');

        }

    }


    private function gerar_slug($nome){

        setlocale (LC_ALL, 'pt_BR');

        $item = preg_replace( '/[`^~:.?&_\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );

        //$item = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $nome);

        $item = strtolower(str_replace(' ', '-', $item));

        return $item;

    }

    private function gerar_codigo_blog(){

        $check_codigo = 0;

        while ($check_codigo == 0) {

            $codigo = strtolower(substr(md5(microtime()),1,rand(6,6)));

            $list = $this->Blog->find('first', array('conditions' => array('codigo' => $codigo)));

            if (count($list) == 0 ) {
                $check_codigo = 1;
                break;
            }

        }

        return $codigo;

    }


}