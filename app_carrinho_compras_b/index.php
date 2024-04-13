<?php

require __Dir__."/vendor/autoload.php";

require_once 'src/Pedido.php';
require_once 'src/CarrinhoCompra.php';
require_once 'src/Item.php';
require_once 'src/EmailService.php';

use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\EmailService;

echo '<h1>COM SRP';

$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copo');
$item1->setValor(4.55);

$item2->setDescricao('Lampada');
$item2->setValor(8.32);

echo '<h4>Pedido iniciado';
echo '<pre>';
print_r($pedido);
echo '</pre>';

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

echo '<h4>Pedido com itens';
echo '<pre>';
print_r($pedido);
echo '</pre>';

echo '<h4>Itens do carrinho';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';

echo '<h4>Valor do pedido<br>';
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item){
    if (is_numeric($item->getValor())) {
        $total += (float) $item->getValor();
    } else {
        echo "Valor do item inválido: " . $item->getValor() . "<br>";
    }
}
echo $total;

echo '<h4>Carrrinho está valido?<br>';
echo $pedido->getCarrinhoCompra()->validarCarrinho();

echo '<h4>Status do pedido<br>';
echo $pedido->getStatus();

echo '<h4>Confirmar pedido<br>';
echo $pedido->confirmar();

echo '<h4>E-mail<br>';
if ($pedido->getStatus() == 'confirmado'){
    echo EmailService::dispararEmail();
}
