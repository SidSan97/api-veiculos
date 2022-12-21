<?php
namespace App\controller;
namespace App\Models;
//include('App/model/BuscarVeiculoModel.php');
use App\Models\buscarVeiculoModel;

header('Content-Type: application/json; charset=utf-8');

class buscarVeiculoController
{
    public function busca($json)
    {
        $valor = $json['valor'];
        $param = $json['parametro'];

        die($valor);

        $fazerBusca = new buscarVeiculoModel;
        $validar    = $fazerBusca->buscarVeiculo($param, $valor);

        if($validar)
            die('inseriu');
        else
            die('n iseriu');
    }
}