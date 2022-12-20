<?php

namespace App\Models;
include_once('Conexao.php');

header('Content-Type: application/json; charset=utf-8');

class ListarVeiculosModel extends Conexao
{
    public function buscarVeiculos()
    {
        $sql = "SELECT * FROM veiculos";
        $stmt = Conexao::connect()->prepare($sql);

        if(($stmt->execute()) and ($stmt->rowCount() != 0))
        {
            $carros = $stmt->fetchAll();
            //die(var_dump($carros));
            $a = json_encode(['status' => 200, 'dados' => $carros]);
            //die(var_dump($a));

            //criamos o arquivo 
            $arquivo = fopen('App/view/carros.json','w'); 

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
        else
            die("erro");
    }
}
