<?php 

use GuzzleHttp\Client;

$client = new Client();
$resposta = $client->request(method:'GET', uri:'https://cursos.alura.com.br/courses?categoryUrlName=programacao&search=php');

$html = $resposta->getBody();