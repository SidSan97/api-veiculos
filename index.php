<?php
include ('App/controller/CadastrarController.php');
include ('App/controller/ListarVeiculosController.php');
use App\controller\CadastrarController;
use App\Models\ListarVeiculosController;

header('Content-Type: application/json; charset=utf-8');

if($_GET['q'] == "cadastrar")
{
    $json = $_GET['v'];

    $obj = json_decode($json, true);

    $cadControl = new CadastrarController;
    $a = $cadControl->cadastrar($obj);

}
if($_GET['q'] == "pesquisarTudo")
{  
    $listarVeiculos = new ListarVeiculosController;
    $listarVeiculos->listarVeiculos();
   
    //header('location: teste.php');
}

?>