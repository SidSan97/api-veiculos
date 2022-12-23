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
            $json = json_encode(['status' => 200, 'dados' => $carros]);
            $json = base64_encode($json);

            return $json;
        }
        else{

            die("erro");
        }
    }
}
