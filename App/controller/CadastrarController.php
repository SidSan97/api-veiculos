<?php

namespace App\controller;
include('App/model/CadastrarModel.php');
use CadastrarModel;

header('Content-Type: application/json; charset=utf-8');

class CadastrarController
{
    public function cadastrar($json)
    {
        $modelo = $json['modelo'];
        $cor    = $json['cor'];
        $ano    = $json['ano'];
        $placa  = $json['placa'];

        $cadModel = new CadastrarModel;
        $validar = $cadModel->inserirNoBd($modelo, $cor, $ano, $placa);

        if($validar)
            return true;
        else
            return false; 
    }
}