<?php

namespace app\controller;

use app\core\Controller;
use app\dao\ProdutoDAO;

require_once ('app/core/Controller.php');
require_once ('app/model/Produto.php');

class AdminController extends Controller {
    public function index(){
        $produtoDAO = new ProdutoDAO();
        $produtos = $produtoDAO->findLastProducts();
        $_REQUEST['produtos'] = $produtos;
        $this->render('adminview//index.php','app_adminview.php');
    }
}