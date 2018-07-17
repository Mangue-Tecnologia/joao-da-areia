<?php

App::uses('AppController', 'Controller');

App::uses('CakeEmail','Network/Email');

class JsonController extends Controller {

    public $components = array('RequestHandler', 'Session');
    public $helpers = array('Js');

    public $uses = array(
        'Arquivos',
        'Emails', 
        'Configuracoes', 
        'Banners', 
        'Newsletter', 
        'Produtos', 
        'Categorias', 
        'Pedidos', 
        'Sobre', 
        'Contato',
        'Links',
        'Blog',
        'Parceiros',
        'Servicos'
    );


    public function beforeFilter(){

        $this->autoRender = false;

    }

    public function home(){

        header('Content-Type: application/json');

        $array = array();

        /* info */

        $array['info'] = $this->informacoes(); 

        /* slider */

        $array['slider'] = $this->sliders();

        /* sobre */

        $array['sobre'] = $this->sobre();

        /* produtos */

        $array['blog'] = $this->blog();

        $array['links'] = $this->links();

        $array['parceiros'] = $this->parceiros();

        $array['servicos'] = $this->servicos();


        //var_dump($array);


        echo json_encode($array, JSON_PRETTY_PRINT);

        //echo '<pre>'.json_encode($array, JSON_PRETTY_PRINT).'</pre>';

    }

    public function blog(){

        $array = array();

        $qry = $this->Blog->find('all', array(
            'order' => array('Blog.id DESC'))
        );
        
        foreach ($qry as $key => $value) {

            $array[$key] = array(
                'titulo' => $value['Blog']['titulo'],
                'imagem' => 'img/blog/'.$value['Blog']['imagem'],
                'descricao_curta' => $value['Blog']['descricao_curta'],
                'slug' => $value['Blog']['slug'],
                'codigo' => $value['Blog']['codigo']
            );

        }

        return $array;

    }

    public function blog_single($codigo, $slug){

        header('Content-Type: application/json');

        header("Access-Control-Allow-Origin: *");

        $array['blog'] = array();

        $item = $this->Blog->find('first', array('conditions' => array('Blog.codigo' => $codigo, 'Blog.slug' => $slug) ));

        if (!empty($item)) {

            $array['blog'] = array(
                'titulo' => $item['Blog']['titulo'],
                'imagem' => 'img/blog/'.$item['Blog']['imagem'],
                'descricao_curta' => $item['Blog']['descricao_curta'],
                'texto' => $item['Blog']['texto'],
                'data' => date('d/m/Y', strtotime($item['Blog']['data'])),
            );

        }

        echo json_encode($array, JSON_PRETTY_PRINT);

    }

    public function links(){

        $array = array();

        $qry = $this->Links->find('all', array(
            'order' => array('Links.ordem ASC'))
        );
        
        foreach ($qry as $key => $value) {

            $array[$key] = array(
                'nome' => $value['Links']['nome'],
                'url' => $value['Links']['link'],
            );

        }

        return $array;

    }

    public function parceiros(){

        $array = array();

        $qry = $this->Parceiros->find('all', array(
            'order' => array('Parceiros.ordem ASC'))
        );
        
        foreach ($qry as $key => $value) {

            $array[$key] = array(
                'nome' => $value['Parceiros']['nome'],
                'url' => $value['Parceiros']['link'],
                'imagem' => 'img/parceiros/'.$value['Parceiros']['imagem']
            );

        }

        return $array;

    }

    public function banners(){

        $array = array();

        $qry = $this->Banners->find('all', array(
            'order' => array('Banners.ordem ASC'))
        );
        
        foreach ($qry as $key => $value) {

            $array[$key] = array(
                'nome' => $value['Banners']['nome'],
                'imagem' => 'img/banners/'.$value['Banners']['imagem']
            );

        }

        return $array;

    }

    public function servicos(){

        $array = array();

        $qry = $this->Servicos->find('all', array(
            'order' => array('Servicos.ordem ASC'))
        );
        
        foreach ($qry as $key => $value) {

            $array[$key] = array(
                'nome' => $value['Servicos']['nome'],
                'texto' => $value['Servicos']['texto'],
                'imagem' => 'img/servicos/'.$value['Servicos']['imagem']
            );

        }

        return $array;

    }

    public function depoimentos(){

        $array = array();

        $qry = $this->Depoimentos->find('all', array('order' => 'id ASC'));

        foreach ($qry as $key => $value) {
            
            $array[$key] = array(
                'id' => $value['Depoimentos']['id'],
                'nome' => $value['Depoimentos']['nome'],
                'texto' => $value['Depoimentos']['texto'],
                'funcao' => $value['Depoimentos']['funcao'],
                'imagem' => 'img/depoimentos/'.$value['Depoimentos']['imagem']
            ); 
        }

        return $array;

    }

    public function arquivos(){

        $array = array();

        $qry = $this->Agrupamentos->find('all', array('conditions' => array('status' => 1),'contain' => 'Arquivos', 'order' => 'id ASC'));

        return $qry;

    }

    public function arquivos_categorizados($id){

        header('Content-Type: application/json; charset=utf-8');

        header("Access-Control-Allow-Origin: *");

        $array = array();

        $conditions = array(
            'Arquivos.agrupamento_id' => $id
        );

        $qry = $this->Arquivos->find('all', array(
            'conditions' => $conditions, 
            'order' => array('Arquivos.id DESC'))
        );
        
        foreach ($qry as $key => $value) {

            $array[$key] = array(
                'nome' => $value['Arquivos']['nome'],
                'extensao' => $value['Arquivos']['extensao']
            );

        }

        echo json_encode(array_values($array), JSON_PRETTY_PRINT);

    }

    public function vendedores(){

        $array = array();

        $qry = $this->Vendedores->find('all', array('order' => 'id ASC', 'conditions' => array('status' => 1, 'mostrar_site' => 1)));

        foreach ($qry as $key => $value) {
            
            $array[$key] = array(
                'id' => $value['Vendedores']['id'],
                'nome' => $value['Vendedores']['nome'],
                'imagem' => 'img/vendedores/'.$value['Vendedores']['imagem']
            ); 
        }

        return $array;

    }

    public function categorias_downloads(){

        $array = array();

        $qry = $this->Agrupamentos->find('all', array('order' => 'id ASC', 'conditions' => array('status' => 1)));

        foreach ($qry as $key => $value) {
            
            $array[$key] = array(
                'id' => $value['Agrupamentos']['id'],
                'nome' => $value['Agrupamentos']['nome']
            ); 
        }

        return $array;

    }

    public function produtos_categorias(){

        $array = array();

        $qry = $this->Categorias->find('all', array('order' => 'id ASC', 'conditions' => array('status' => 1)));

        foreach ($qry as $key => $value) {
            
            $array[$key] = array(
                'id' => $value['Categorias']['id'],
                'nome' => $value['Categorias']['nome']
            ); 
        }

        return $array;

    }

    public function produtos($ctg, $limit, $preco){

        header('Content-Type: application/json; charset=utf-8');

        header("Access-Control-Allow-Origin: *");

        $array = array();

        $conditions = array(
            'Produtos.status' => 1
        );

        if (!empty($preco) and $preco != "all") {
            
            switch ($preco) {
                case 1:
                    array_push($conditions, array('Produtos.preco <' => '100.00'));
                    break;
                case 2:
                    array_push($conditions, array('Produtos.preco >=' => '100.00'));
                    array_push($conditions, array('Produtos.preco <=' => '199.99'));
                    break;
                case 3:
                    array_push($conditions, array('Produtos.preco >=' => '200.00'));
                    array_push($conditions, array('Produtos.preco <=' => '399.99'));
                    break;
                case 4:
                    array_push($conditions, array('Produtos.preco >=' => '400.00'));
                    break;
                default:
                    # code...
                    break;
            }

        }

        if ($limit == "all") {
            $limit = '1000000000'; // pensar melhor nisso
        }

        if (empty($ctg) or $ctg != "all") {
            array_push($conditions, array('Produtos.categoria_id' => $ctg));
        }

        $qry = $this->Produtos->find('all', array(
            'conditions' => $conditions, 
            'order' => array('Produtos.id DESC'),
            'limit' => $limit)
        );
        
        foreach ($qry as $key => $value) {

            $array[$key] = array(
                'nome' => $value['Produtos']['nome'],
                'codigo' => $value['Produtos']['codigo'],
                'imagem' => 'img/produtos/'.$value['Produtos']['imagem'],
                'slug' => $value['Produtos']['slug'],
                'codigo_slug' => $value['Produtos']['codigo_slug']
            );

        }

        echo json_encode(array_values($array), JSON_PRETTY_PRINT);

    }

    public function produtos_categoria($ctg, $area){

        header('Content-Type: application/json');

        header("Access-Control-Allow-Origin: *");

        $array = array();

        if ($ctg == 0) {
            
            $categoria = $this->Categorias->find('first', array('order' => array('Categorias.id ASC')));

            if (!empty($categoria)) {
                $conditions = array(
                    'Produtos.categoria_id' => $categoria['Categorias']['id']
                );
            }            

        } else {

            $conditions = array(
                'Produtos.categoria_id' => $ctg
            );

        }

        if ($area == "orcamento") {
            array_push($conditions, array('Produtos.orcamento' => 1));
        } else {
            array_push($conditions, array('Produtos.orcamento' => 0));
        }
        

        $qry = $this->Produtos->find('all', array(
            'conditions' => $conditions,
            'contain' => array('Subcategorias'), 
            'order' => array('Produtos.id DESC'))
        );

        $key_ctg = 0;

        $array['subcategorias'] = array();

        foreach ($qry as $key => $value) {

            $sid = $value['Produtos']['subcategoria_id'];

            if (!isset($array['subcategorias'][$sid])) {
                $array['subcategorias'][$sid] = array(
                    'nome' => $value['Subcategorias']['nome'],
                    'id' => $value['Subcategorias']['id'],
                    'produtos' => array()
                );
            }

            array_push($array['subcategorias'][$sid]['produtos'], 
                array(
                    'nome' => $value['Produtos']['nome'],
                    'imagem' => 'img/produtos/'.$value['Produtos']['imagem'],
                    'preco' => 'R$ '.number_format($value['Produtos']['preco'], 2, ',', '.'),
                    'slug' => $value['Produtos']['slug'],
                    'codigo_slug' => $value['Produtos']['codigo_slug']
                )
            );
            

        }

        $array['subcategorias'] = array_values($array['subcategorias']);

        echo json_encode($array, JSON_PRETTY_PRINT);

        //echo '<pre>'.json_encode($array, JSON_PRETTY_PRINT).'</pre>';

    }

    public function produto_single($codigo, $slug){

        header('Content-Type: application/json');

        header("Access-Control-Allow-Origin: *");

        $array['produto'] = array();

        //$codigo = $this->request->data['codigo'];

        $pro = $this->Produtos->find('first', array('contain' => array('Categorias'), 'conditions' => array('Produtos.codigo_slug' => $codigo, 'Produtos.slug' => $slug) ));

        if (!empty($pro)) {

            $array['produto'] = array(
                'nome' => $pro['Produtos']['nome'],
                'imagem' => 'img/produtos/'.$pro['Produtos']['imagem'],
                'id' => $pro['Produtos']['id'],
                'categoria' => $pro['Categorias']['nome'],
                'keywords' => $pro['Produtos']['keywords'],
                'codigo' => $pro['Produtos']['codigo'],
                'codigo_slug' => $pro['Produtos']['codigo_slug'],
                'orcamento' => $pro['Produtos']['orcamento'],
                'descricao' => $pro['Produtos']['descricao'],
                'preco' => 'R$ '.number_format($pro['Produtos']['preco'], 2, ',', '.'),
                'tipo_frete' => $pro['Produtos']['tipo_frete'],
                'relacionados' => $this->produtos_relacionados($pro['Produtos']['categoria_id'], $pro['Produtos']['id'])
            );

        }

        echo json_encode($array, JSON_PRETTY_PRINT);

    }

    private function produtos_relacionados($cat_id, $id){

        $array = array();

        $relacionados = $this->Produtos->find('all', array('conditions' => array(
            'Produtos.categoria_id' => $cat_id), 
            'order' => 'rand()', 
            'limit' => 4)
        );

        foreach ($relacionados as $key => $value) {

            if ($value['Produtos']['id'] != $id) {
                $array[$key] = array(
                    'nome' => $value['Produtos']['nome'],
                    'imagem' => 'img/produtos/'.$value['Produtos']['imagem'],
                    'preco' => 'R$ '.number_format($value['Produtos']['preco'], 2, ',', '.'),
                    'preco_dividido' => 'R$ '.number_format($value['Produtos']['preco'] / 6, 2, ',', '.'),
                    'slug' => $value['Produtos']['slug'],
                    'codigo_slug' => $value['Produtos']['codigo_slug']
                );
            }
            
        }

        return $array;

    }

    public function busca_produtos(){

        header('Content-Type: application/json');

        header("Access-Control-Allow-Origin: *");

        $id = $this->request->params['id'];

        $array = array();

        $qry = $this->Produtos->find('first', array('conditions' => array('Produtos.id' => $id)));

        if (!empty($qry)) {

            if (strlen($qry['Produtos']['nome']) > 22){
                $nome = substr($qry['Produtos']['nome'], 0 ,22);
                $nome = $nome."..."; 
                $nome = ucwords(mb_strtolower($nome, 'UTF-8'));
            } else {
                $nome = ucwords(mb_strtolower($qry['Produtos']['nome'], 'UTF-8'));
            }

            $array = array(
                'id' => $qry['Produtos']['id'],
                'codigo_slug' => $qry['Produtos']['codigo_slug'],
                'slug' => $qry['Produtos']['slug'],
                'nome' => $nome,
                'preco' => 'R$ '.number_format($qry['Produtos']['preco'], 2, ',', '.'),
                'preco_double' => $qry['Produtos']['preco'],
                'imagem' => 'img/produtos/'.$qry['Produtos']['imagem'],
                'quantidade' => 1
            ); 
        }

        echo json_encode($array, JSON_PRETTY_PRINT);

    }

    public function produtos_recentes(){

        $array = array();
        
        $qry = $this->Produtos->find('all', array('conditions' => array('Produtos.status' => 1), 'order' => array('Produtos.id DESC'), 'limit' => 8));

        foreach ($qry as $key => $value) {
            
            $array[$key] = array(
                'id' => $value['Produtos']['id'],
                'nome' => $value['Produtos']['nome'],
                'slug' => $value['Produtos']['slug'],
                'codigo_slug' => $value['Produtos']['codigo_slug'],
                'preco' => 'R$ '.number_format($value['Produtos']['preco'], 2, ',', '.'),
                'preco_dividido' => 'R$ '.number_format($value['Produtos']['preco'] / 6, 2, ',', '.'),
                'imagem' => 'img/produtos/'.$value['Produtos']['imagem']
            );

        }

        return $array;

    }

    public function produtos_populares(){

        $array = array();
        
        $qry = $this->Produtos->find('all', array(
            'conditions' => array('Produtos.status' => 1), 
            'order' => array('Produtos.qtd_vendidos ASC', 'Produtos.id DESC'), 
            'limit' => 12)
        );

        foreach ($qry as $key => $value) {
            
            $array[$key] = array(
                'id' => $value['Produtos']['id'],
                'nome' => $value['Produtos']['nome'],
                'slug' => $value['Produtos']['slug'],
                'codigo' => $value['Produtos']['codigo'],
                'codigo_slug' => $value['Produtos']['codigo_slug'],
                'imagem' => 'img/produtos/'.$value['Produtos']['imagem']
            );

        }

        return $array;

    }

    public function pedidos(){

        header("Access-Control-Allow-Origin: *");

        $array = array();

        $id = $this->request->params['id'];

        $qry = $this->Pedidos->find('all', array('conditions' => array('Pedidos.cliente_id' => $id),  'order' => 'Pedidos.id DESC'));

        foreach ($qry as $key => $value) {
            
            $array[$key] = array(
                'id' => $value['Pedidos']['id'],
                'status' => $this->define_status($value['Pedidos']['status']),
                'codigo' => str_pad($value['Pedidos']['id'], 5, '0', STR_PAD_LEFT),
                'data' => date('d/m/Y', strtotime($value['Pedidos']['created_at']))
            );

        }

        echo json_encode($array);

    }

    private function define_status($status){
        
        if ($status == 0) {
            $nome = "Aguardando Pagamento";
        }

        return $nome;
    }

    private function sliders(){

        $array = array();

        $qry = $this->Banners->find('all', array('conditions' => array('Banners.status' => 1), 'order' => array('Banners.ordem ASC')));

        foreach ($qry as $key => $value) {
            
            $array[$key] = array(
                'img' => 'img/banners/'.$value['Banners']['imagem'],
                'titulo' => $value['Banners']['titulo']
            ); 
        }

        return $array;
    
    }

    private function sobre(){

        $array = array();

        $qry = $this->Sobre->find('first', array('conditions' => array('Sobre.id' => 1)));

        if (!empty($qry)) {
            $array = array(
                'imagem' => 'img/sobre/'.$qry['Sobre']['imagem'],
                'texto' => $qry['Sobre']['texto'],
                //'galeria' => $this->galeria_sobre()
            );
        }

        return $array;
    
    }

    private function galeria_sobre(){

        $array = array();

        $qry = $this->GaleriaSobre->find('all', array('order' => array('GaleriaSobre.id DESC')));

        foreach ($qry as $key => $value) {
            
            $array[$key] = array(
                'imagem' => 'img/galeria/sobre/'.$value['GaleriaSobre']['imagem'],
                'nome' => $value['GaleriaSobre']['nome']
            ); 
        }

        return $array;
    
    }

    private function informacoes(){

        $config = $this->Configuracoes->find('first', array('conditions' => array('Configuracoes.id' => 1)));
        
        $data = array(
            "keywords" => $config['Configuracoes']['keywords'],
            "nome" => $config['Configuracoes']['nome'],
            "descricao" => $config['Configuracoes']['descricao'],
            "horario" => $config['Configuracoes']['horario'],
            "telefone" => $config['Configuracoes']['telefone'],
            "email" => $config['Configuracoes']['email'],
        );

        return $data;
    
    }

    /* processamento */

    public function contato(){

        header("Access-Control-Allow-Origin: *");

        if ($this->request->is('post')) {
            
            $tipo = $this->request->data['tipo'];
            $nome = $this->request->data['nome'];
            $email = $this->request->data['email'];
            $assunto = $this->request->data['assunto'];
            $mensagem = $this->request->data['mensagem'];
            
            // faz validações
            if( empty($tipo) || empty($email) || (empty($assunto)) || (empty($mensagem)) || (empty($nome)) ) {

                echo json_encode(501);

            } else {

                $recipes = array();

                $recipients =  $this->Contato->find('all');

                foreach ($recipients as $key => $value) {
                    $recipes[$key]['email'] = $value['Contato']['email'];
                }
                
                if($this->envia_email($tipo, $nome, $email, $assunto, $mensagem, 'contato', $recipes)){

                    echo json_encode(200);

                } else {

                    echo json_encode(500);
                }
             
            }

        } else {

            echo json_encode(500);
        }

    }

    public function contato_pedido(){

        header("Access-Control-Allow-Origin: *");

        if ($this->request->is('post')) {
            
            $nome = $this->request->data['nome'];
            $email = $this->request->data['email'];
            $assunto = 'Pedido #'.$this->request->data['pedido'];
            $mensagem = $this->request->data['mensagem'];
            
            // faz validações
            if( empty($email) || (empty($assunto)) || (empty($mensagem)) || (empty($nome)) ) {

                echo json_encode(501);

            } else {

                $recipes = array();

                $recipients =  $this->Contato->find('all');

                foreach ($recipients as $key => $value) {
                    $recipes[$key]['email'] = $value['Contato']['email'];
                }
                
                if($this->envia_email($nome, $email, $assunto, $mensagem, 'contato', $recipes)){

                    echo json_encode(200);

                } else {

                    echo json_encode(500);
                }
             
            }

        } else {

            echo json_encode(500);
        }

    }

    public function orcamento(){

        header("Access-Control-Allow-Origin: *");

        if ($this->request->is('post')) {
            
            $nome = $this->request->data['nome'];
            $email = $this->request->data['email'];
            $telefone = $this->request->data['telefone'];
            $empresa = $this->request->data['empresa'];
            $produto = $this->request->data['produto'];
            $qtd1 = $this->request->data['qtd1'];
            $qtd2 = $this->request->data['qtd2'];
            $qtd3 = $this->request->data['qtd3'];
            
            // faz validações
            if( empty($nome) || (empty($email)) || (empty($telefone)) || (empty($produto) ) ) {

                echo json_encode(501);

            } else {

                $recipes = array();

                $recipients =  $this->Contato->find('all');

                foreach ($recipients as $key => $value) {
                    $recipes[$key]['email'] = $value['Contato']['email'];
                }
                
                if($this->envia_email_orcamento($nome, $email, $telefone, $empresa, $produto, $qtd1, $qtd2, $qtd3, 'orcamento', $recipes)){

                    echo json_encode(200);

                } else {

                    echo json_encode(500);
                }
             
            }

        } else {

            echo json_encode(500);
        }

    }

    private function envia_email($tipo, $nome, $email, $assunto, $mensagem, $template, $recipes){

        $send = new CakeEmail();

        $send->config(array('transport' => 'Smtp', 'host' => 'tls://smtp.gmail.com', 'port' => 465, 'timeout' => 60, 'client' => null, 
            'log' => false, 'charset' => 'utf-8', 'headerCharset' => 'utf-8', 'username' => 'ecosystem2018@gmail.com', 
            'password' => 'eco@2017', 'ssl' => true)
        );

        $send->template($template, null);
        $send->viewVars(array('tipo' => $tipo, 'nome' => $nome, 'email' => $email, 'assunto' => $assunto, 'mensagem' => $mensagem));

        foreach ($recipes as $key => $value) {
            $send->Addto($value['email']);
        }
        
        $send->from('ecosystem2018@gmail.com');
        $send->subject($assunto);
        $send->emailFormat('html');

        if ($send->send()) {
            return true;
        } else {
            return false;
        }

    }

    private function envia_email_orcamento($nome, $email, $telefone, $empresa, $produto, $qtd1, $qtd2, $qtd3, $template, $recipes){

        $send = new CakeEmail();

        $send->config(array('transport' => 'Smtp', 'host' => 'tls://smtp.gmail.com', 'port' => 465, 'timeout' => 60, 'client' => null, 
            'log' => false, 'charset' => 'utf-8', 'headerCharset' => 'utf-8', 'username' => 'brindesexpress2@gmail.com', 
            'password' => 'brindes@2017', 'ssl' => true)
        );

        $send->template($template, null);
        $send->viewVars(array(
            'nome' => $nome, 
            'email' => $email, 
            'telefone' => $telefone, 
            'empresa' => $empresa,
            'produto' => $produto,
            'qtd1' => $qtd1,
            'qtd2' => $qtd2,
            'qtd3' => $qtd3
        ));

        foreach ($recipes as $key => $value) {
            $send->Addto($value['email']);
        }
        
        $send->from('brindesexpress2@gmail.com');
        $send->subject('Pedido de orçamento');
        $send->emailFormat('html');

        if ($send->send()) {
            return true;
        } else {
            return false;
        }

    }

}