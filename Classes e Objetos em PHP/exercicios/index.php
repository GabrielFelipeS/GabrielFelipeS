<?php
require("Carro.php");
require("Retangulo.php");
require("Pessoa.php")

echo "Exercicio 1: <br>";
// Instanciando carro
$gol = new Carro("Volkswagen ","Gol", 2012);
$uno = new Carro("Fiat ","Uno", 2012);
$siena = new Carro("Fiat","Siena", 2012);
$celta = new Carro("General Motors", "Celta", 2012);


// Printando valores
echo "Marca: ".$gol->get_marca()."<br>Modelo: ".$gol->get_modelo()."<br>Ano: ".$gol->get_ano()."<br><br>";
echo "Marca: ".$uno->get_marca()."<br>Modelo: ".$uno->get_modelo()."<br>Ano: ".$uno->get_ano()."<br><br>";
echo "Marca: ".$siena->get_marca()."<br>Modelo: ".$siena->get_modelo()."<br>Ano: ".$siena->get_ano()."<br><br>";
echo "Marca: ".$celta->get_marca()."<br>Modelo: ".$celta->get_modelo()."<br>Ano: ".$celta->get_ano()."<br><br>";

echo "<br><br>";
echo "Exercicio 2: <br>";

$retangulo = new Retangulo(25, 4);
echo "Área do retangulo de largura ".$retangulo->get_largura()." e altura ".$retangulo->get_altura()." é igual a ".$retangulo->area()."<br>";
echo "Perametro do retangulo de largura ".$retangulo->get_largura()." e altura ".$retangulo->get_altura()." é igual a ".$retangulo->perimetro();


echo "<br><br>";
echo "Exercicio 3: <br>";
