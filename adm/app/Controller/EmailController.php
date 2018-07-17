<?php

App::uses('Controller', 'Controller');

App::uses('CakeEmail','Network/Email');

class EmailController extends Controller {

	public $uses = array('Contato');

    public function beforeFilter(){

        header('Content-Type: application/json');

        $this->autoRender = false;

    }

	public function processa_email(){

        if ($this->request->is('post')) {
            
            $nome = $this->request->data['nome'];
        	$email = $this->request->data['email'];
            $assunto = $this->request->data['assunto'];
            $mensagem = $this->request->data['mensagem'];
            $telefone = $this->request->data['telefone'];
            
            // faz validações
            if( empty($email) || (empty($assunto)) || (empty($mensagem)) || (empty($nome)) || (empty($telefone)) ) {

                 echo json_encode(500);

            } else {

                $recipes = array();

                $recipients =  $this->Contato->find('all');

                foreach ($recipients as $key => $value) {
                    $recipes[$key]['email'] = $value['Contato']['sie_email'];
                }


                $estado = $this->get_estado($estado);

                if($this->envia_email($nome, $email, $assunto, $telefone, $mensagem, $recipes)){
                    echo json_encode(200);
                } else {
                    echo json_encode(500);
                } 
             
            }

        }

	}

	private function envia_email($nome, $email, $assunto, $telefone, $mensagem, $recipes){

		$send = new CakeEmail();

        $send->config(array('transport' => 'Smtp', 'host' => 'tls://smtp.gmail.com', 'port' => 465, 'timeout' => 60, 'client' => null, 
            'log' => false, 'charset' => 'utf-8', 'headerCharset' => 'utf-8', 'username' => 'testemangue@gmail.com', 
            'password' => '@manguetecnologia', 'ssl' => true)
        );

        $send->template('contato');
        $send->viewVars(array('nome' => $nome, 'email' => $email, 'assunto' => $assunto, 'telefone' => $telefone, 'mensagem' => $mensagem, 'cidade' => $cidade,
            'estado' => $estado)
        );

        foreach ($recipes as $key => $value) {
            $send->Addto($value['email']);
        }
        
        $send->from('testemangue@gmail.com');
        $send->subject($assunto);
        $send->emailFormat('html');

        if ($send->send()) {
            return true;
        } else {
            return false;
        }

	}

}
