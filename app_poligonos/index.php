<?php

require __DIR__.'/vendor/autoload.php';

use src\Retangulo;
use src\Quadrado;

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<H3>Area do retangulo: '.$retangulo->getArea().'</H3>';


$quadrado = new Quadrado();
$quadrado->setAltura(5);    
echo '<H3>Area do quadrado: '.$quadrado->getArea().'</H3>';

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<H3>LSP - Area do retangulo: '.$retangulo->getArea().'</H3>';