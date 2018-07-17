<?php

App::uses('AppController', 'Controller');

class PaginasController extends AppController {

    public $components = array('RequestHandler', 'Session', 'Imagens');
    public $helpers = array('Js');

    public $uses = array('Sobre', 'ServicosCategorias', 'Servicos', 'Usuario', 'SobreImagem');


    public function beforeFilter(){

        $login = $this->Session->read('Auth');

        if(empty($login)){
            return $this->redirect(array('controller' => 'login', 'action' => 'index'));
        } else {
            $this->set('Login', $this->Usuario->find('first', array('conditions'=>array('Usuario.usr_id'=>$login['User']['usr_id']))));
        }
    }
    
    public function sobre_textos_listar() {

        $this->set('Items', $this->Sobre->find('all', array('order' => array('sob_ordem ASC'))));

    }

    public function sobre_textos_adicionar(){

        if ($this->request->is('post')) {
            
            $titulo = $this->request->data['titulo'];
            $texto = $this->request->data['texto'];

            if (!empty($titulo) and !empty($texto)) {

                $this->request->data['sob_titulo'] = $titulo;
                $this->request->data['sob_texto'] = $texto;

                $tamanho = $this->Sobre->find('all');
                $this->request->data['sob_ordem'] = count($tamanho) + 1;

                if($this->Sobre->save($this->request->data)) {
                    $this->Session->setFlash('Salvo com sucesso','flash_success');
                } else {
                    $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                }

            } else {
                $this->Session->setFlash('Os campos não podem ficar vazios !','flash_error');
            }
        }

    }

    public function sobre_textos_editar(){

        $id = $this->request->params['id'];

        $item = $this->Sobre->find('first', array('conditions' => array('Sobre.sob_id' => $id)));

        if (!empty($item)) {

            $this->set('item', $item);

            if ($this->request->is('post')) {

                $titulo = $this->request->data['titulo'];
                $texto = $this->request->data['texto'];

                if (!empty($titulo) and !empty($texto)) {

                    $this->request->data['sob_titulo'] = $titulo;
                    $this->request->data['sob_texto'] = $texto;
                    $this->request->data['sob_id'] = $id;

                    if($this->Sobre->save($this->request->data)) {

                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/paginas/sobre/textos/editar/'.$id);
                    
                    } else {
                        $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                    }

                } else {
                    $this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
                }

            }

        } else {
            return $this->redirect(array('controller' => 'paginas', 'action' => 'sobre_textos_listar'));
        }

    }

    public function sobre_textos_remover(){

        $id = $this->request->params['id'];

        $item = $this->Sobre->find('first', array('conditions' => array('Sobre.sob_id' => $id)));

        if (!empty($item)) {

            $this->request->data['sob_id'] = $id;

            if($this->Sobre->delete($this->request->data)){

                $this->Session->setFlash('item deletado com sucesso!','flash_success');
                return $this->redirect(array('controller' => 'paginas', 'action' => 'sobre_textos_listar'));
            
            } else {

                $this->Session->setFlash('Aconteceu um erro...!','flash_error');
                return $this->redirect(array('controller' => 'paginas', 'action' => 'sobre_textos_listar'));
            }
        
        } else {

            $this->Session->setFlash('Aconteceu um erro...!','flash_error');
            return $this->redirect(array('controller' => 'paginas', 'action' => 'sobre_textos_listar'));
        }

    }

    public function sobre_imagens_listar(){

        $this->set('Items', $this->SobreImagem->find('all', array('order' => array('sim_id ASC'))));

    }

    public function sobre_imagens_editar(){


        $id = $this->request->params['id'];

        $item = $this->SobreImagem->find('first', array('conditions' => array('SobreImagem.sim_id' => $id)));

        if (!empty($item)) {

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

                                $list = $this->SobreImagem->find('first', array('conditions'=>array('SobreImagem.sim_imagem'=>$path)));

                                if (count($list) == 0 ) {
                                    $check = 1;
                                    break;
                                }

                            }

                            $this->request->data['sim_imagem'] = $path;

                            $imagem_antiga = $item['SobreImagem']['sim_imagem'];

                        } else {
                            $this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
                        }
                    
                    }

                    $this->request->data['sim_nome'] = $nome;
                    $this->request->data['sim_id'] = $id;
                    
                    if($this->SobreImagem->save($this->request->data)) {

                        if (!empty($imagem['name'])) {
                            
                            $dir = '/home/siritecnologia/www/remil/assets/img/sobre'.DS;
                            unlink($dir.$imagem_antiga);

                            $largura = 250;


                            $x = $this->request->data['x1'];
                            $y = $this->request->data['y1'];
                            $w = $this->request->data['w'];
                            $h = $this->request->data['h'];

                            $this->Imagens->tratamento_2($dir, $x, $y, $w, $h, $largura, $imagem['tmp_name'] , $path, $extensao);


                        }

                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/paginas/sobre/imagens/editar/'.$id);
                    
                    } else {
                        $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                    }

                } else {
                    $this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
                }

            }

        } else {
            return $this->redirect(array('controller' => 'paginas', 'action' => 'sobre_imagens_listar'));
        }


    }

    public function servicos_categorias_listar() {

        $this->set('Items', $this->ServicosCategorias->find('all', array('order' => array('sca_id DESC'))));

    }

    public function servicos_categorias_adicionar(){

        if ($this->request->is('post')) {
            
            $nome = $this->request->data['nome'];
            $descricao = $this->request->data['descricao'];

            if (!empty($nome)) {

                $slug = strtolower(str_replace(" ","-",preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($nome)))));

                // retira % , / ou & se houver

                $slug = str_replace('%', '-', $slug);
                $slug = str_replace('/', '-', $slug);
                $slug = str_replace('&', '-', $slug);


                $this->request->data['sca_nome'] = $nome;
                $this->request->data['sca_slug'] = $slug;
                $this->request->data['sca_descricao'] = $descricao;


                if($this->ServicosCategorias->save($this->request->data)) {
                    $this->Session->setFlash('Salvo com sucesso','flash_success');
                } else {
                    $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                }
            
            } else {
                $this->Session->setFlash('Os campos não podem ficar vazios !','flash_error');
            }
        }

    }

    public function servicos_categorias_editar(){

        $id = $this->request->params['id'];

        $item = $this->ServicosCategorias->find('first', array('conditions' => array('ServicosCategorias.sca_id' => $id)));

        if (!empty($item)) {

            $this->set('item', $item);

            if ($this->request->is('post')) {

                $nome = $this->request->data['nome'];
                $descricao = $this->request->data['descricao'];

                if (!empty($nome)) {

                    $slug = strtolower(str_replace(" ","-",preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($nome)))));

                    // retira % , / ou & se houver

                    $slug = str_replace('%', '-', $slug);
                    $slug = str_replace('/', '-', $slug);
                    $slug = str_replace('&', '-', $slug);

                    $this->request->data['sca_nome'] = $nome;
                    $this->request->data['sca_slug'] = $slug;
                    $this->request->data['sca_descricao'] = $descricao;
                    $this->request->data['sca_id'] = $id;
                    
                    if($this->ServicosCategorias->save($this->request->data)) {

                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/paginas/solucoes/categorias/editar/'.$id);
                    
                    } else {
                        $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                    }

                } else {
                    $this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
                }

            }

        } else {
            return $this->redirect(array('controller' => 'paginas', 'action' => 'servicos_categorias_listar'));
        }

    }

    public function servicos_categorias_remover(){

    }

    public function servicos(){

        //unlink('/var/www/azulaosports.com.br/public_html/assets/img/produtos\1.jpg');

        //unlink(getcwd().'assets/img/produtos/1.jpg');

        $this->set('Items', $this->Servicos->find('all', array('contain' => array('ServicosCategorias'),'order' => array('ser_id DESC'))));
    }

    public function servicos_adicionar(){

        $this->set('Categorias', $this->ServicosCategorias->find('all', array('order' => array('sca_id ASC'))));

        if ($this->request->is('post')) {
            
            $nome = $this->request->data['nome'];
            $categoria = $this->request->data['categoria'];
            $descricao = $this->request->data['descricao'];
            $imagem = $this->request->data['imagem'];

            if (!empty($nome) and !empty($imagem)) {

                $extensao = strtolower(end(explode(".", $imagem['name'])));

                if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {
                    $check = 0;

                    while ($check == 0) {

                        $path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

                        $list = $this->Servicos->find('first', array('conditions'=>array('Servicos.ser_imagem'=>$path)));

                        if (count($list) == 0 ) {
                            $check = 1;
                            break;
                        }

                    }

                    $this->request->data['ser_nome'] = $nome;
                    $this->request->data['ser_imagem'] = $path;
                    $this->request->data['ser_descricao'] = $descricao;
                    $this->request->data['sca_id'] = $categoria;


                    if($this->Servicos->save($this->request->data)) {

                        // executa o crop e salva a imagem

                        $largura = 400;
                        $dir = '/var/www/azulaosports.com.br/public_html/assets/img/produtos'.DS;

                        $x = $this->request->data['x1'];
                        $y = $this->request->data['y1'];
                        $w = $this->request->data['w'];
                        $h = $this->request->data['h'];

                        $this->Imagens->tratamento_2($dir, $x, $y, $w, $h, $largura, $imagem['tmp_name'] , $path, $extensao);

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

    public function servicos_editar(){

        $id = $this->request->params['id'];

        $item = $this->Servicos->find('first', array('conditions' => array('Servicos.ser_id' => $id)));

        if (!empty($item)) {

            $this->set('item', $item);

            $this->set('Categorias', $this->ServicosCategorias->find('all', array('order' => array('sca_id ASC'))));

            if ($this->request->is('post')) {

                $nome = $this->request->data['nome'];
                $descricao = $this->request->data['descricao'];
                $categoria = $this->request->data['categoria'];
                $imagem = $this->request->data['imagem'];

                if (!empty($nome)) {

                    if (!empty($imagem['name'])) {

                        $extensao = strtolower(end(explode(".", $imagem['name'])));

                        if ($extensao == "png" or $extensao == "jpg" or $extensao == "jpeg" or $extensao == "gif") {

                            $check = 0;

                            while ($check == 0) {

                                $path = sha1($imagem['name']).substr(md5(microtime()),1,rand(4,6)).'.'.$extensao;

                                $list = $this->Servicos->find('first', array('conditions'=>array('Servicos.ser_imagem'=>$path)));

                                if (count($list) == 0 ) {
                                    $check = 1;
                                    break;
                                }

                            }

                            $this->request->data['ser_imagem'] = $path;

                            $imagem_antiga = $item['Servicos']['ser_imagem'];

                        } else {
                            $this->Session->setFlash('Extensão inválida, apenas jpg, png e gif são permitidos','flash_error');
                        }
                    
                    }

                    $this->request->data['ser_nome'] = $nome;
                    $this->request->data['ser_descricao'] = $descricao;
                    $this->request->data['sca_id'] = $categoria;
                    $this->request->data['ser_id'] = $id;
                    
                    if($this->Servicos->save($this->request->data)) {

                        if (!empty($imagem['name'])) {

                            $dir = '/var/www/azulaosports.com.br/public_html/assets/img/produtos'.DS;
                            unlink($dir.$imagem_antiga);

                            // executa o crop e salva a imagem

                            $largura = 400;

                            $x = $this->request->data['x1'];
                            $y = $this->request->data['y1'];
                            $w = $this->request->data['w'];
                            $h = $this->request->data['h'];

                            $this->Imagens->tratamento_2($dir, $x, $y, $w, $h, $largura, $imagem['tmp_name'] , $path, $extensao);

                        }

                        $this->Session->setFlash('Salvo com sucesso','flash_success');

                        $this->redirect('/paginas/solucoes/servicos/editar/'.$id);
                    
                    } else {
                        $this->Session->setFlash('Aconteceu um erro ao salvar...','flash_error');
                    }

                } else {
                    $this->Session->setFlash('Os campos não podem ficar vazio !','flash_error');
                }

            }

        } else {
            return $this->redirect(array('controller' => 'paginas', 'action' => 'servicos'));
        }

    }

    public function servicos_remover(){

        $id = $this->request->params['id'];

        $item = $this->Servicos->find('first', array('conditions' => array('Servicos.ser_id' => $id)));

        if (!empty($item)) {

            $path = $item['Servicos']['ser_imagem'];
            
            $this->request->data['ser_id'] = $id;

            if($this->Servicos->delete($this->request->data)){

                $dir = '/var/www/azulaosports.com.br/public_html/assets/img/produtos'.DS;
                unlink($dir.$path);

                $this->Session->setFlash('item deletado com sucesso!','flash_success');
                return $this->redirect(array('controller' => 'paginas', 'action' => 'servicos'));
            
            } else {

                $this->Session->setFlash('Aconteceu um erro...!','flash_error');
                return $this->redirect(array('controller' => 'paginas', 'action' => 'servicos'));
            }
        
        } else {

            $this->Session->setFlash('Aconteceu um erro...!','flash_error');
            return $this->redirect(array('controller' => 'paginas', 'action' => 'servicos'));
        }

    }


}