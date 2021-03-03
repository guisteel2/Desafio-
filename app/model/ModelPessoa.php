<?php
namespace App\model;
use App\config\Banco;
use \PDO;
use \PDOException;

class ModelPessoa{

    public $id;
    public $Nome;

    public static function getPessoa($where = null){
        if($where){
            $where = 'nome LIKE "'.$where.'"';
        }
        
        return (new Banco('pessoas'))->select($where)->fetchAll(PDO::FETCH_CLASS);
    }

    public function cadastrar($array){
        
        //INSERIR NO BANCO
        $obDatabase = new Banco('pessoas');
        
        $id = $obDatabase->insert([
                                    'nome'      => $array,
                                    'data_admissao'=> str_replace("/","-",date('Y/m/d')),
                                   ]);
        return true;
    }


    public function excluir($id){
        return (new Banco('pessoas'))->delete('id_pessoa = '.$id);
    }

    
}