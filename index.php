<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4</title>
</head>
<body>
    <h1>PHP POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Heranç<a href="tel:+"></a></li>
    </ul>
<?php
// Importando a classe
require_once "src/PessoaFisica.php"; // subclasse
require_once "src/PessoaJuridica.php"; // subclasse
// criação dos objetos
$clientePF = new PessoaFisica;
$clientePJ = new PessoaJuridica;
// Atribundo dados via setters do objeto
$clientePF->setNome('Rafael');
$clientePF->setEmail('Rafael@gmail.com');
$clientePF->setSenha('123abc');
$clientePF->setCpf('123.456.789-00');
$clientePF->setIdade(38);

$clientePJ->setNome('Augusto');
$clientePJ->setEmail('Augusto@gmail.com');
$clientePJ->setSenha('124556');
$clientePJ->setCnpj('05.055.045/0001-56');
$clientePJ->setAnoFundacao(1950);
$clientePJ->setNomeFantasia('infotec');


?>
<!-- Exibindo DADOS -->
<pre><?=var_dump($clientePJ, $clientePF)?></pre>
<?php $Cliente = new Cliente; ?> <!-- Erro, pois cliente é abstrato -->
<pre><?=var_dump($Cliente)?></pre>

</body>
</html>