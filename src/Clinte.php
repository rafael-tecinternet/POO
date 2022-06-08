<?php
class Cliente {
    //Porpriedades (ou atributos)
    private string $nome;
    private string $email;
    private string $senha;
    //  Métodos getters e setters
    public function getNome():string {
        return $this->nome;
    }
    public function setNome(string $nome) {
        // propriedade = parâmetro
        $this->nome = $nome;
    }
    public function getEmail():string {
        return $this->email;
    }
    public function setEmail(string $email) {
        // propriedade = parâmetro
        $this->email = $email;
    }
    public function getSenha():string {
        return $this->senha;
    }
    public function setSenha(string $senha) {
        // propriedade = parâmetro
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }
    
}