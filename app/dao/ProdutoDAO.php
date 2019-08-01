<?php

namespace app\dao;

use app\config\Database;
use app\model\Produto;

require_once ('app/config/Database.php');
require_once ('app/model/Produto.php');

class ProdutoDAO {

   protected $database;

    function __construct() {
        $this->database = new Database();
    }

    public function findById($produto_id){
        $query = "SELECT * FROM produtos WHERE produto_id = :produto_id";
        $sth = $this->database->connectPDO()->prepare($query);
        $sth->bindValue(':produto_id', $produto_id, \PDO::PARAM_INT);
        $sth->execute();
        if($result = $sth->fetchObject('app\\model\\Produto')){
            return $result;
        } else{
            return false;
        }
    }

    public function findAll(){
        $query = "SELECT * FROM produtos";
        $sth = $this->database->connectPDO()->prepare($query);
        $sth->execute();
        if($result = $sth->fetchAll(\PDO::FETCH_CLASS, 'app\\model\\Produto')){
            return $result;
        } else{
            return false;
        }
    }

    public function findAllEnabled(){
        $query = "SELECT * FROM produtos WHERE status IS NOT NULL";
        $sth = $this->database->connectPDO()->prepare($query);
        $sth->execute();
        if($result = $sth->fetchAll(\PDO::FETCH_CLASS, 'app\\model\\Produto')){
            return $result;
        } else{
            return false;
        }
    }

    public function findLastProducts(){
        $query = "SELECT * FROM produtos ORDER BY produto_id DESC LIMIT 5";
        $sth = $this->database->connectPDO()->prepare($query);
        $sth->execute();
        if($result = $sth->fetchAll(\PDO::FETCH_CLASS, 'app\\model\\Produto')){
            return $result;
        } else{
            return false;
        }
    }

    public function save(Produto $produto){
        $query = "
            INSERT INTO produtos (
                status,
                nome, 
                preco, 
                descricao, 
                imagem
            ) VALUES (
                :status,
                :nome,
                :preco,
                :descricao,
                :imagem
            )";
        try{
            $sth = $this->database->connectPDO()->prepare($query);
            $sth->bindValue(':status', $produto->getStatus());
            $sth->bindValue(':nome', $produto->getNome());
            $sth->bindValue(':preco', $produto->getPreco());
            $sth->bindValue(':descricao', $produto->getDescricao());
            $sth->bindValue(':imagem', $produto->getImagem());
            return $sth->execute();
        } catch (\PDOException $e) {
            throw $e;
        }
    }
    public function delete($produto_id) {
        $query = "DELETE FROM produtos WHERE produto_id = :produto_id";
        $sth = $this->database->connectPDO()->prepare($query);
        $sth->bindValue(':produto_id', $produto_id, \PDO::PARAM_INT);
        try {
            return $sth->execute();
        } catch (\PDOException $e) {
            throw $e;
        }
    }

    public function update(Produto $produto, $produto_id){
        $query = "UPDATE produtos SET status = :status, nome = :nome, preco = :preco, descricao = :descricao, imagem = :imagem
            WHERE (produto_id = :produto_id)";
        try {
            $sth = $this->database->connectPDO()->prepare($query);
            $sth->bindValue(':status', $produto->getStatus());
            $sth->bindValue(':nome', $produto->getNome());
            $sth->bindValue(':preco', $produto->getPreco());
            $sth->bindValue(':descricao', $produto->getDescricao());
            $sth->bindValue(':imagem', $produto->getImagem());
            $sth->bindValue(':produto_id', $produto_id, \PDO::PARAM_INT);
            return $sth->execute();
        } catch (\PDOException $e) {
            throw $e;
        }
    }
}