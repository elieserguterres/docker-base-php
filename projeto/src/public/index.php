<?php

require '../vendor/autoload.php';
use JansenFelipe\CepGratis\CepGratis;

$cep = '90830010';
// $address = file_get_contents('https://viacep.com.br/ws/'. $cep . '/json/');
$address = CepGratis::search($cep); 

echo "<pre>";
print_r($address);
echo "</pre>";

echo "<hr>";
