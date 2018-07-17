<?php

App::uses('AppController', 'Controller');

class DashboardController extends AppController {

    public $components = array('RequestHandler');
    public $helpers = array('Js');

    public $uses = array('Usuario', 'Newsletter', 'Views', 'Pedidos', 'Produtos');

    public function beforeFilter(){

        $login = $this->Session->read('Auth');

        if(empty($login)){
            return $this->redirect(array('controller' => 'login', 'action' => 'index'));
        } else {
            $this->set('Login', $this->Usuario->find('first', array('conditions'=>array('Usuario.id'=>$login['User']['id']))));
        }
    }

    public function index() {

        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

        date_default_timezone_set('America/Recife');

        $this->set(
            'estatisticas', array(
                'mes_atual' => strftime("%B"),
                'views' => $this->total_views(),
                'v_mes' => $this->total_views_mes()
            )
        );

        //echo "ok";

    }

    public function grafico_vendas() {

        $this->autoRender = false; 

        if ($this->request->is('post')) {

            date_default_timezone_set('America/Recife');

            $array = array();

            $mes_atual = date('m');

            for ($i=1; $i <= 7; $i++) { 

                if ($i == 1) {
                    $mes = date('m');
                } else {
                    $mes = date('m', strtotime('- '.($i - 1).' months'));
                }

                if ($i == 1) {
                    $ano = date('Y');
                } else {

                    if ($mes >= $mes_atual) {
                        $ano = date('Y', strtotime('- 1 year'));
                    } else {
                        $ano = date('Y');
                    }
                }

                $condition['MONTH(updated_at) ='] = $mes;

                $condition['status'] = 1;

                $condition['status'] = 3;

                $vendas_mes = $this->Pedidos->find('all', array('conditions' => $condition));

                $vendas = array();

                $vendas['mes'] = count($vendas_mes);

                $mensal = $vendas['mes'];

                switch ($mes) {
                    case '01':
                    $nome = "01";
                    break;
                    case '02':
                    $nome = "02";
                    break;
                    case '03':
                    $nome = "03";
                    break;
                    case '04':
                    $nome = "04";
                    break;
                    case '05':
                    $nome = "05";
                    break;
                    case '06':
                    $nome = "06";
                    break;
                    case '07':
                    $nome = "07";
                    break;
                    case '08':
                    $nome = "08";
                    break;
                    case '09':
                    $nome = "09";
                    break;
                    case '10':
                    $nome = "10";
                    break;
                    case '11':
                    $nome = "11";
                    break;
                    case '12':
                    $nome = "12";
                    break;
                    default:
                    break;
                }

                $array[$i] = array('mes' => $mensal, 'nome' => $nome, 'ano' => $ano);

            }

            echo json_encode($array);

        }
    
    }

    public function grafico_pedidos() {

        $this->autoRender = false; 

        if ($this->request->is('post')) {

            date_default_timezone_set('America/Recife');

            $array = array();

            $mes_atual = date('m');

            for ($i=1; $i <= 7; $i++) { 

                if ($i == 1) {
                    $mes = date('m');
                } else {
                    $mes = date('m', strtotime('- '.($i - 1).' months'));
                }

                if ($i == 1) {
                    $ano = date('Y');
                } else {

                    if ($mes >= $mes_atual) {
                        $ano = date('Y', strtotime('- 1 year'));
                    } else {
                        $ano = date('Y');
                    }
                }

                $condition['MONTH(updated_at) ='] = $mes;

                $vendas_mes = $this->Pedidos->find('all', array('conditions' => $condition));

                $vendas = array();

                $vendas['mes'] = count($vendas_mes);

                $mensal = $vendas['mes'];

                switch ($mes) {
                    case '01':
                    $nome = "01";
                    break;
                    case '02':
                    $nome = "02";
                    break;
                    case '03':
                    $nome = "03";
                    break;
                    case '04':
                    $nome = "04";
                    break;
                    case '05':
                    $nome = "05";
                    break;
                    case '06':
                    $nome = "06";
                    break;
                    case '07':
                    $nome = "07";
                    break;
                    case '08':
                    $nome = "08";
                    break;
                    case '09':
                    $nome = "09";
                    break;
                    case '10':
                    $nome = "10";
                    break;
                    case '11':
                    $nome = "11";
                    break;
                    case '12':
                    $nome = "12";
                    break;
                    default:
                    break;
                }

                $array[$i] = array('mes' => $mensal, 'nome' => $nome, 'ano' => $ano);

            }

            echo json_encode($array);

        }
    
    }

    private function total_views(){

        $views = $this->Views->find('all');

        return count($views);

    }

    private function total_views_mes(){

        $condition['MONTH(data) ='] = date('m');

        $views_mes = $this->Views->find('all', array('conditions' => $condition));

        return count($views_mes);
        
    }

    private function conversoes(){

        $valor = 0;

        $condition['MONTH(updated_at) ='] = date('m');

        $condition['status'] = 1;

        $condition['status'] = 3;

        $pedidos_mes = $this->Pedidos->find('all', array('conditions' => $condition));

        foreach ($pedidos_mes as $key => $value) {
            $valor = $valor + $value['Pedidos']['valor'];
        }

        return $valor;

    }

    private function total_vendas(){

        $condition['MONTH(updated_at) ='] = date('m');

        $condition['status'] = 1;

        $condition['status'] = 3;

        $pedidos_mes = $this->Pedidos->find('all', array('conditions' => $condition));

        return count($pedidos_mes);

    }

    private function total_vendas_preco(){

        $valor = 0;

        $condition['MONTH(updated_at) ='] = date('m');

        $condition['status'] = 1;

        $condition['status'] = 3;

        $pedidos_mes = $this->Pedidos->find('all', array('conditions' => $condition));

        foreach ($pedidos_mes as $key => $value) {
            $valor = $valor + $value['Pedidos']['valor'];
        }

        return $valor;

    }

    private function ultimos_pedidos(){

        $array = array();

        $pedidos = $this->Pedidos->find('all', array('order' => 'Pedidos.id DESC', 'limit' => 7));

        foreach ($pedidos as $key => $value) {

            $array[$key] = array(
                'id' => $value['Pedidos']['id'],
                'nome' => $value['Pedidos']['nome'],
                'status' => $value['Pedidos']['status'],
                'data' => date('d/m/Y', strtotime($value['Pedidos']['created_at'])),
                'valor' => 'R$ '.number_format($value['Pedidos']['valor'], 2, ',', '.')
            );
        }

        return $array;

    }


}