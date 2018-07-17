<?php

Router::connect('/', array('controller' => 'dashboard', 'action' => 'index'));

Router::connect('/login', array('controller' => 'login', 'action' => 'index'));

Router::connect('/logout', array('controller' => 'login', 'action' => 'logout'));

// configurações


Router::connect('/configuracoes', array('controller' => 'configuracoes', 'action' => 'editar'));

Router::connect('/emails', array('controller' => 'sistemaEmails', 'action' => 'index'));
Router::connect('/emails/adicionar', array('controller' => 'sistemaEmails', 'action' => 'adicionar'));
Router::connect('/emails/editar/:id', array('controller' => 'sistemaEmails', 'action' => 'editar'), array('id' => '[0-9]+'));
Router::connect('/emails/remover/:id', array('controller' => 'sistemaEmails', 'action' => 'remover'), array('id' => '[0-9]+'));

Router::connect('/sobre/textos', array('controller' => 'sobre', 'action' => 'index'));
Router::connect('/sobre/textos/editar/:id', array('controller' => 'sobre', 'action' => 'texto_editar'), array('id' => '[0-9]+'));

Router::connect('/paginas/parceiros', array('controller' => 'parceiros', 'action' => 'index'));
Router::connect('/paginas/parceiros/adicionar', array('controller' => 'parceiros', 'action' => 'adicionar'));
Router::connect('/paginas/parceiros/editar/:id', array('controller' => 'parceiros', 'action' => 'editar'), array('id' => '[0-9]+'));
Router::connect('/paginas/parceiros/remover/:id', array('controller' => 'parceiros', 'action' => 'remover'), array('id' => '[0-9]+'));
Router::connect('/paginas/parceiros/ordem', array('controller' => 'parceiros', 'action' => 'ordem'), array('id' => '[0-9]+'));

Router::connect('/paginas/blog', array('controller' => 'blog', 'action' => 'index'));
Router::connect('/paginas/blog/adicionar', array('controller' => 'blog', 'action' => 'adicionar'));
Router::connect('/paginas/blog/editar/:id', array('controller' => 'blog', 'action' => 'editar'), array('id' => '[0-9]+'));
Router::connect('/paginas/blog/remover/:id', array('controller' => 'blog', 'action' => 'remover'), array('id' => '[0-9]+'));

Router::connect('/paginas/servicos', array('controller' => 'servicos', 'action' => 'index'));
Router::connect('/paginas/servicos/adicionar', array('controller' => 'servicos', 'action' => 'adicionar'));
Router::connect('/paginas/servicos/editar/:id', array('controller' => 'servicos', 'action' => 'editar'), array('id' => '[0-9]+'));
Router::connect('/paginas/servicos/remover/:id', array('controller' => 'servicos', 'action' => 'remover'), array('id' => '[0-9]+'));
Router::connect('/paginas/servicos/ordem', array('controller' => 'servicos', 'action' => 'ordem'));

Router::connect('/newsletter', array('controller' => 'newsletter', 'action' => 'index'));
Router::connect('/newsletter/adicionar', array('controller' => 'newsletter', 'action' => 'adicionar'));
Router::connect('/newsletter/editar/:id', array('controller' => 'newsletter', 'action' => 'editar'), array('id' => '[0-9]+'));
Router::connect('/newsletter/remover/:id', array('controller' => 'newsletter', 'action' => 'remover'), array('id' => '[0-9]+'));

Router::connect('/paginas/links', array('controller' => 'links', 'action' => 'index'));
Router::connect('/paginas/links/adicionar', array('controller' => 'links', 'action' => 'adicionar'));
Router::connect('/paginas/links/editar/:id', array('controller' => 'links', 'action' => 'editar'), array('id' => '[0-9]+'));
Router::connect('/paginas/links/remover/:id', array('controller' => 'links', 'action' => 'remover'), array('id' => '[0-9]+'));
Router::connect('/paginas/links/ordem', array('controller' => 'links', 'action' => 'ordem'));


/*BANNERS*/
Router::connect('/banners', array('controller' => 'banners', 'action' => 'index'));
Router::connect('/banners/adicionar', array('controller' => 'banners', 'action' => 'adicionar'));
Router::connect('/banners/editar/:id', array('controller' => 'banners', 'action' => 'editar'), array('id' => '[0-9]+'));
Router::connect('/banners/remover/:id', array('controller' => 'banners', 'action' => 'remover'), array('id' => '[0-9]+'));
Router::connect('/banners/ordem', array('controller' => 'banners', 'action' => 'ordem'));
	
/*SOBRE*/
Router::connect('/paginas/sobre', array('controller' => 'sobre', 'action' => 'index'));
Router::connect('/paginas/sobre/editar/:id', array('controller' => 'sobre', 'action' => 'texto_editar'), array('id' => '[0-9]+'));

/* json */

Router::connect('/home/json', array('controller' => 'json', 'action' => 'home'));
Router::connect('/info/json', array('controller' => 'json', 'action' => 'info'));

Router::connect('/email_contato/json', array('controller' => 'json', 'action' => 'processa_email_contato'));

CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';