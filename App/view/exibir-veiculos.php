<?php

header('Content-Type: application/json; charset=utf-8');
$resultado = $_GET['q'] == '' ? '' : $_GET['q'];
echo base64_decode($resultado);