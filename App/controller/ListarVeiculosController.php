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

        header('location: App/view/exibir-veiculos.php?q='.$resultado);
   }
}