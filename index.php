<?php
include ('App/controller/CadastrarController.php');
include ('App/controller/ListarVeiculosController.php');
include ('App/controller/BuscarVeiculoController.php');

use App\controller\buscarVeiculoController;
use App\controller\CadastrarController;
use App\Models\buscarVeiculoController as BuscarVeiculoControl;
use App\Models\ListarVeiculosController;

//header('Content-Type: application/json; charset=utf-8');

if($_GET['q'] == "cadastrar")
{
    $json = $_GET['v'];

    $obj = json_decode($json, true);

    $cadControl = new CadastrarController;
    $cadControl->cadastrar($obj);

}
else if($_GET['q'] == "pesquisarTudo")
{  
    $listarVeiculos = new ListarVeiculosController;
    $listarVeiculos->listarVeiculos();
}
else if($_GET['q'] == "buscarVeiculo")
{
    $json = $_GET['v'];

    $obj = json_decode($json, true);
    
    $buscaVeiculo = new BuscarVeiculoControl;
    $buscaVeiculo->busca($obj);
}

?>