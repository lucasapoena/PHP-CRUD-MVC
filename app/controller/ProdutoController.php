<?php

namespace app\controller;

use app\core\Controller;
use app\model\Produto;
use app\dao\ProdutoDAO;

require_once('app/model/Produto.php');
require_once('app/dao/ProdutoDAO.php');
require_once ('app/core/Controller.php');

class ProdutoController extends Controller {

    public function index(){
        $_REQUEST['title_page'] = 'Catálogo de Produtos';
        $produtoDao = new ProdutoDAO();
        $produtos = $produtoDao->findAll();

        $_REQUEST['produtos'] = $produtos;
        $this->render('adminview//produto//index.php', 'app_adminview.php');
    }

    public function create(){
        $_REQUEST['title_page'] = 'Adicionar';
        $produto = new Produto();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $produto->setStatus($_POST['status']);
            $produto->setNome($_POST['nome']);
            $produto->setDescricao($_POST['descricao']);
            $produto->setImagem($_FILES['imagem']['name']);
            $produto->setPreco($_POST['preco']);
            if ($produto->is_valid()) {
                $produtoDAO = new ProdutoDAO();
                if ($produtoDAO->save($produto)){
                    $_REQUEST['success_messages'] =  array("O produto foi cadastrado com sucesso.");
                    return $this->index();
                }
            } else{
                $_REQUEST['error_messages'] = $produto->getErrors();
            }
        }
        $_REQUEST['produto'] = $produto;
        $this->render('adminview//produto//create.php', 'app_adminview.php');
    }

    public function delete(){
        $produto_id = $_POST['produto_id'];
        if (($_SERVER['REQUEST_METHOD'] == 'POST')
            AND (isset($produto_id))
            AND is_numeric($produto_id)) {

            $produtoDAO = new ProdutoDAO();
            if ($produtoDAO->delete($produto_id)){
                $_REQUEST['success_messages'] =  array("O produto $produto_id foi deletado com sucesso.");
            } else {
                $_REQUEST['error_messages'] = array("O produto não foi deletado.");
            }
        }
        $this->index();
    }

    public function edit(){
        if (($_SERVER['REQUEST_METHOD'] == 'GET')
            AND isset($_GET['produto_id'])){
            $_REQUEST['title_page'] = 'Editar';
            $produtoDAO = new ProdutoDAO();
            $produto_id = (int) $_GET['produto_id'];
            $_REQUEST['produto'] = $produtoDAO->findById($produto_id);
            return $this->render('adminview//produto//edit.php', 'app_adminview.php');
        }
        $_REQUEST['error_messages'] = array('Nenhum produto foi selecionado.');
        $this->index();
    }

    public function update(){
        if (($_SERVER['REQUEST_METHOD'] == 'POST')
            AND isset($_POST['produto_id'])){
            $produtoDAO = new ProdutoDAO();
            $produto_id = (int) $_POST['produto_id'];
            $produto = $produtoDAO->findById($produto_id);
            $produto->setStatus($_POST['status']);
            $produto->setNome($_POST['nome']);
            $produto->setDescricao($_POST['descricao']);
            $produto->setImagem($_FILES['imagem']['name']);
            $produto->setPreco($_POST['preco']);
            if ($produto->is_valid()) {
                if ($produtoDAO->update($produto, $produto_id)){
                    $_REQUEST['success_messages'] =  array("O produto foi atualizado com sucesso.");
                }
            } else{
                $_REQUEST['error_messages'] = $produto->getErrors();
                $_REQUEST['produto'] = $produto;
                return $this->render('adminview//produto//edit.php', 'app_adminview.php');
            }
        }
        return $this->index();
    }
}