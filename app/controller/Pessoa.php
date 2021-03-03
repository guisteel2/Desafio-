<?php
namespace App\controller;

use App\config\Banco;
use App\model\ModelPessoa;

class Pessoa
{
    public function getPessoas(){

        if($_POST['name']){
            return ModelPessoa::getPessoa($_POST['name']);
        }else{
            return ModelPessoa::getPessoa();
        }
    }
    
    public function cadastrar(){
        
        if($_POST['name'] != ''){
            if(ModelPessoa::cadastrar($_POST['name'])){
                return "Salvo";
            }
        }else{
            return "Erro";
        }
        
    }

    public function deletar($id){
        if(ModelPessoa::excluir($id)){
            header('Location: /index.php');
        }
        
    }

}