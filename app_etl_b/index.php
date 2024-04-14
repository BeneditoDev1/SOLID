<?php

require __DIR__."/vendor/autoload.php";

require_once 'src/Leitor.php';
require_once 'src/extrator/Arquivo.php';
require_once 'src/extrator/Csv.php';
require_once 'src/extrator/Txt.php';

use src\Leitor;

$leitor = new Leitor();
$leitor->setDiretorio(__DIR__.'/arquivos');
$leitor->setArquivo('dados.csv');

echo '<pre>';
print_r($leitor->lerArquivo());
echo '</pre>';

$leitor = new Leitor();
$leitor->setDiretorio(__DIR__.'/arquivos');
$leitor->setArquivo('dados.txt');
echo '<pre>';
print_r($leitor->lerArquivo());
echo '</pre>';