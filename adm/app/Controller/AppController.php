<?php

App::uses('Controller', 'Controller');


class AppController extends Controller {

	public $components = array('Session','Auth', 'Flash');

    // 'DebugKit.Toolbar'

    public function _setErrorLayout() {
        if ($this->name == 'CakeError') { 
            $this->layout = '404';
        }
    }

	public function beforeFilter() {

        //echo Security::hash('joao@2018', NULL, true);

        $this->Auth->loginAction = array('controller' => 'login', 'action' => 'index');
        $this->Auth->loginRedirect = array('controller' => 'dashboard', 'action' => 'index');
        $this->Auth->logoutRedirect = array('controller' => 'login', 'action' => 'index');
        $this->Auth->authorize = array('Controller');
        $this->Auth->authenticate = array('Form' => array(
            'userModel' => 'Usuario', 
            'fields' => array(
                'username' => 'email', 
                'password' => 'senha')
            )
        );

        $this->Auth->allow();

        
    }


    public function beforeRender() {

        $this->_setErrorLayout();

        if ($_SERVER['SERVER_NAME'] == "joao-da-areia-adm") {
            $url_base = Configure::read('app_url');
            $assets_url = Configure::read('assets_url');
        } else {
            $url_base = Configure::read('app_url_oficial');
            $assets_url = Configure::read('assets_url_oficial');
        }

        $this->set(
            'conf', array(
                'assets_url' => $assets_url,
                'site_url' => $url_base,
                'layout' => $this->layout($url_base)
            )
        );
    }

    private function layout($url_base){
        $array = array(
            'nome_site' => 'Joao da Areia',
            'cor_base' => 'c5c5c5',
            'cor_call_to_action' => '002035',
            'logotipo_url' => $url_base.'img/logo.png'
        );

        return $array;
    }

}
