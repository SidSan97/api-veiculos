<?php
include('Conexao.php');
use App\Models\Conexao;

class CadastrarModel extends Conexao
{
    public function inserirNoBd($modelo, $cor, $ano, $placa)
    {
        $conn = $this->connect();

        $sql = "INSERT INTO veiculos VALUES (default, :modelo, :cor, :ano, :placa)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':modelo', $modelo);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':ano', $ano);
        $stmt->bindParam(':placa', $placa);

        if($stmt->execute()) {
            return true;
            exit;
        }
        else {
            return false;
            exit;
        }
    }
}