<?php

require __DIR__.'/vendor/autoload.php';

use src\Poligono;
use src\poligonos\Retangulo;
use src\poligonos\Quadrado;


$poligono = new Poligono();
$poligono->setForma(new Retangulo);
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<H3>Area do retangulo: '.$poligono->getArea().'</H3>';

$poligono = new Poligono();
$poligono->setForma(new Quadrado);
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<H3>Area do quadrado: '.$poligono->getArea().'</H3>';

/*
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
echo '<H3>LSP - Area do retangulo: '.$retangulo->getArea().'</H3>';*/