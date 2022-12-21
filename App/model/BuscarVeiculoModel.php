<?php
namespace App\Models;

include_once('Conexao.php');

header('Content-Type: application/json; charset=utf-8');

class buscarVeiculoModel extends Conexao
{
    public function buscarVeiculo($param, $valor)
    {
        $sql = "SELECT * FROM veiculos WHERE $param = '$valor'"; 
        $stmt = Conexao::connect()->prepare($sql);

        if(($stmt->execute()) and ($stmt->rowCount() != 0))
        {
            $carros = $stmt->fetchAll();
            $a = json_encode(['status' => 200, 'dados' => $carros]);

            //criamos o arquivo 
            $arquivo = fopen('App/view/carrosBusca.json','w'); 

            //verificamos se foi criado 
            if ($arquivo == false) 
                die('Não foi possível criar o arquivo.'); 

            //escrevemos no arquivo 
            $texto = $a; 
            fwrite($arquivo, $texto); 

            //Fechamos o arquivo após escrever nele 
            fclose($arquivo);

            return true;
        }
        else{

            die("erro");
        }
    }
}

/*$a = new buscarVeiculoModel;
$a->buscarVeiculo($_GET['p'], $_GET['v']);*/