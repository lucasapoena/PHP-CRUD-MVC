<?php


namespace app\config;

use app\core\Route;

require_once ('app//controller//AppController.php');
require_once ('app//controller//AdminController.php');
require_once ('app//controller//ProdutoController.php');



require_once ('app/core/Route.php');

class Routes extends Route {

    public function setAllowInitialRoutes(){
        $this->routes['/'] = array('controller' => 'AppController', 'action'=> 'index');
        $this->routes['/admin'] = array('controller' => 'AdminController', 'action'=> 'index');
        $this->routes['/produtos'] = array('controller' => 'ProdutoController', 'action'=> 'index');
        $this->routes['/produtos/create'] = array('controller' => 'ProdutoController', 'action'=> 'create');
        $this->routes['/produtos/edit'] = array('controller' => 'ProdutoController', 'action'=> 'edit');
        $this->routes['/produtos/update'] = array('controller' => 'ProdutoController', 'action'=> 'update');
        $this->routes['/produtos/delete'] = array('controller' => 'ProdutoController', 'action'=> 'delete');
    }


}