<?php
require_once "Clinte.php";
class PessoaFisica extends Cliente {
    private string $cpf;
    private int $idade;

    public function getCpf(): string {
        return $this->cpf;
    }
    public function setCpf(string $cpf){
        $this->cpf = $cpf;
    }
    public function getIdade(): string {
        return $this->idade;
    }
    public function setIdade(string $idade){
        $this->idade = $idade;
    }


}
?>