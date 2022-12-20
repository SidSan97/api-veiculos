<?php

namespace App\controller;
namespace App\Models;
include_once('App/model/ListarVeiculosModel.php');

class ListarVeiculosController 
{
   public function listarVeiculos()
   {
        $todosVeiculos = new ListarVeiculosModel();
        $resultado = $todosVeiculos->buscarVeiculos();

        if($resultado)
            header('location: App/view/carros.json');
        else
            die('n buscou');
   }
}