<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Automotiva</title>
</head>
<body style= "background-color: #fad04e";>

<div id = "menu">
<img src= "BANNER-SITE-03.png" width= 1600>   </div>
<div id = "menu">
<ul>
        <li> <a class= "button" href= "https://garagebrasil.com.br/?gclid=CjwKCAiAu5agBhBzEiwAdiR5tKlz8jgUFue63NeV9yWSG_xiZt6nJmYG7Pf-_Im4wMBQpdi5PHNnSBoCnOEQAvD_BwE">HOME</a></li>
        <li> <a class= "button" href="https://www.zara.com/br/pt/man-new-in-l711.html?v1=2107829">SOBRE NÓS</a></li>
        <li> <a class= "button" href="https://www.zara.com/br/pt/kids-girl-new-in-l391.html?v1=2038468">FALE CONOSCO</a></li>
    
    </ul>
</div>

    
</body>
</html>


<?php
include_once ("carros-class.php");
include_once ("cliente-class.php");
include_once ("produtos-class.php");
include_once ("servicos-class.php");


$cliente = new cliente ();

$cliente -> cadastrado () ;
$cliente -> nome = " NOME: Maria Eduarda Akiyama de Campos <br>"; 
$cliente -> sexo = " SEXO: Feminino <br>";
$cliente -> idade = " IDADE: 16 anos <br>";
$cliente -> altura = " ALTURA: 1,63cm <br>";
$cliente -> raca = " RAÇA: Branca <br>";
$cliente -> apelido = " APELIDO: Maria <br>";
$cliente -> telefone = " TEEFONE: (18)99602-7327 <br>";
$cliente -> email = " E-MAIL: duda.akiyama@gmail.com <br>";
$cliente -> cpf = " CPF: 44239760801 <br>";
$cliente -> endereco = " ENDEREÇO: Rua marechal costa e silva, nº176 <br>";

echo $cliente -> nome; 
echo $cliente -> sexo;
echo $cliente -> idade;
echo $cliente -> altura;
echo $cliente -> raca;
echo $cliente -> apelido;
echo $cliente -> telefone;
echo $cliente -> email;
echo $cliente -> cpf;
echo $cliente -> endereco;

$carro = new carro ();

$carro -> conserto ();
$carro -> modelo = " MODELO DO CARRO: Rand Rover <br>";
$carro -> cor = " COR: Preto <br>";
$carro -> anodefabricacao = " ANO DE FABRICAÇÃO: 2022 <br>";
$carro -> kmrodado = " QUILÔMETROS RODADOS: 100km <br>";
$carro -> placadocarro = " PLACA DO CARRO: RIO2A18 <br>";

echo $carro -> modelo;
echo $carro -> cor;
echo $carro -> anodefabricacao;
echo $carro -> kmrodado;
echo $carro -> placadocarro;

$produto = new produto ();

$produto -> verificado ();
$produto -> condicao = " CONDIÇÃO DO PNEU: Novo <br>";
$produto -> peso = " PESO: 8,9kg <br>";
$produto -> cor = " COR: Preto <br>";
$produto -> modelo = " MODELO: on-road <br>";
$produto -> estrutura = " ESTRUTURA: Radial";
$produto -> datadefabricacao = " DATA DE FABRICAÇÃO: 17/04/2022 <br>";
$produto -> lote = " LOTE: 849";
$produto -> codigodebarra = " CÓDIGO DE BARRA: 1K5J6L3U9PTT <br>";
$produto -> indicedecarga = "INDICE DE CARGA: 82 <br>";
$produto -> valor = " VALOR: R$250,00 <br>";

echo $produto -> condicao;
echo $produto -> peso;
echo $produto -> cor;
echo $produto -> modelo;
echo $produto -> estrutura;
echo $produto -> datadefabricacao;
echo $produto -> lote;
echo $produto -> codigodebarra;
echo $produto -> indicedecarga;
echo $produto -> valor;

$servico = new servico ();

$servico -> concluido ();
$servico -> trocadepneu ="Troca de pneu <br>";
$servico -> reparos = "Reparos <br>";
$servico -> manutencao = "Manutenção <br>";
$servico -> checagem = "Checagem <br>";
$servico -> alinhamento = "Alinhamento <br>";
$servico -> valor = "Mão de obra: R$1200,00 <br> <br><br>";

echo $servico -> trocadepneu;
echo $servico -> reparos;
echo $servico -> manutencao;
echo $servico -> checagem;
echo $servico -> alinhamento;
echo $servico -> valor;

echo "<h2>ORÇAMENTO TOTAL= R$1450,00 </h2> "

?>