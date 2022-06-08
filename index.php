<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <h1>PHP POO - Exemplo 3</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Acesso direto à propriedades</li>
        <li>Atribuição de dados e leitura</li>
    </ul>
<?php
// Importando a classe
require_once "src/Clinte.php";
$clienteA = new Cliente;
$clienteB = new Cliente;
// Atribundo dados às propriedades do objeto
$clienteA->nome = "Rafael";
$clienteA->email = "rafael@gmail.com";
$clienteA->telefones = ["11-2345-5432, 11-98766-4444"];
$clienteB->nome = "Bernardo";
$clienteB->email = "bernardo@gmail.com";
$clienteB->telefones = array("11-95556-9895");
?>
<h2>Dados dos objetos (leitura)</h2>
<h3><?=$clienteA->nome?></h3>
<p>E-mail: <?=$clienteA->email?></p>
<p>Telefones: <?=implode(", ",$clienteA->telefones)?></p>
<p>Senha: <?=$clienteA->senha?></p>

<h3><?=$clienteB->nome?></h3>
<p>E-mail: <?=$clienteB->email?></p>
<p>Telefones: <?=implode(", ",$clienteB->telefones)?></p>
<p>Senha: <?=$clienteB->senha?></p>

<h2>Chamando método exibirDados</h2>
<?=  $clienteA->exibirDados()?>
<?=  $clienteB->exibirDados()?>
</body>
</html>