<?php

namespace app\model;

use app\core\Model;

require_once ('app/core/Model.php');

class Produto extends Model {
    private $produto_id;
    private $status;
    private $nome;
    private $preco;
    private $descricao;
    private $imagem;
    private $imagemAllowExtensions = array("jpg","jpeg","png","gif");

    public function is_valid(){
        $this->isNotNull("nome",$this->getNome());
        $this->isNotBlank("nome",$this->getNome());
        $this->isNumber("preco", $this->getPreco());
        $this->uploadFile("imagem", $this->getImagem(), $this->imagemAllowExtensions);
        return count($this->errors) === 0;
    }

    public function getProdutoId(){
        return $this->produto_id;
    }

    public function setProdutoId($produto_id){
        $this->produto_id = $produto_id;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getImagem(){
        return $this->imagem;
    }

    public function setImagem($image){
        $this->imagem = $image;
    }
}
