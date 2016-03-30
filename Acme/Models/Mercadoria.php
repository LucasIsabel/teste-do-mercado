<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 29/03/16
 * Time: 10:33
 */

namespace Acme\Models;

class Mercadoria extends Conexao
{

    protected $table = 'tb_mercadoria';

    public function cadastrarTransacao($codigo_mercadoria,$tipo_mercadoria,$nome_mercadoria,$quantidade,$preco,$tipo_venda)
    {

        $pdo = $this->getCon();

        $pdo->beginTransaction();

        try{

            $sql = "INSERT INTO {$this->table} (codigo_mercadoria,tipo_mercadoria,nome_mercadoria,quantidade,preco,tipo_venda) VALUES (?,?,?,?,?,?)";
            $cadastrar = $pdo->prepare($sql);

                $cadastrar->bindValue(1,$codigo_mercadoria);
                $cadastrar->bindValue(2,$tipo_mercadoria);
                $cadastrar->bindValue(3,$nome_mercadoria);
                $cadastrar->bindValue(4,$quantidade);
                $cadastrar->bindValue(5,$preco);
                $cadastrar->bindValue(6,$tipo_venda);

                if($cadastrar->execute() == 1){

                    $pdo->commit();

                        return true;
                }

                return false;

        }catch(\SQLiteException $e){
            echo $e->getMessage();

            $pdo->rollBack();
        }
    }

    public function listarRegistros(){

        $pdo = $this->getCon();
        $pdo->beginTransaction();

        try{
            $sql = "SELECT * FROM {$this->table}";
            $buscar = $pdo->query($sql);
            $buscar->execute();

                if($buscar->rowCount() != null){

                    return $buscar->fetchAll();

                }

                return false;

        }catch(\SQLiteException $e){
            echo $e->getMessage();

            $pdo->rollBack();
        }


    }
}