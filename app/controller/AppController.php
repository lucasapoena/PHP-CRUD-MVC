<?php

namespace app\controller;

use app\core\Controller;
use app\dao\ProdutoDAO;

require_once ('app/core/Controller.php');

class AppController extends Controller {
    public function index(){
        $produtoDAO = new ProdutoDAO();
        $allow_widgets = ["widget_regua", "widget_vitrine"];
        $_REQUEST['allow_widgets'] = $allow_widgets;
        $_REQUEST['produtos'] = $produtoDAO->findAllEnabled();
        $this->render('frontview//index.php','app_frontview.php');
    }
}