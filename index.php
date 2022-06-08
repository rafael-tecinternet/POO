<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4</title>
</head>
<body>
    <h1>PHP POO - Exemplo 4</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadores de visibilidade</li>
        <li>Métodos  de acesso: getters(pegar os dados - leitura) e setters(colocar dados)</li>
    </ul>
<?php
// Importando a classe
require_once "src/Clinte.php";
// criação dos objetos
$clienteA = new Cliente;
$clienteB = new Cliente;
// Atribundo dados via setters do objeto
$clienteA->setNome("Rafael");
$clienteA->setEmail("Rafael@gmail.com");
$clienteA->setSenha("123456");
$clienteB->setNome("Noronha");
$clienteB->setEmail("noronha@gmail.com");
$clienteB->setSenha("12345689");

?>
<!-- Exibindo DADOS -->
<h2>Dados dos objetos (leitura via getters)</h2>
<h3><?=$clienteA->getNome()?></h3>
<h3><?=$clienteA->getEmail()?></h3>
<h3><?=$clienteA->getSenha()?></h3>
<h3><?=$clienteB->getNome()?></h3>
<h3><?=$clienteB->getEmail()?></h3>
<h3><?=$clienteB->getSenha()?></h3>

</body>
</html>