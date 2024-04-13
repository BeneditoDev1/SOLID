<?php

require __Dir__."/vendor/autoload.php";

use App\CarrinhoCompra;

echo '<h1>SEM SRP</h1>';

$carrinho1 = new CarrinhoCompra();

print_r($carrinho1->exibirItens());

echo 'Valor total: '.$carrinho1->exibirValorTotal();

//$carrinho1->adicionarItem('Bicicleta', 750.10);

//$carrinho1->adicionarItem('Geladeira', 1950.15);

//$carrinho1->adicionarItem('Tapete', 350.20);

echo "<br />";

print_r($carrinho1->exibirItens());
echo "<br />";
echo 'Valor total recalculando: '.$carrinho1->exibirValorTotal(); 
echo "<br />";
echo 'Status: '.$carrinho1->exibirStatus();

echo "<br />";
if($carrinho1->confirmaPedido()){
    echo 'Pedido realizado com sucesso!';
} else{
    echo 'Erro na confirmacao do pedido. Carrinho nao possui itens';
}
echo "<br />";
echo 'Status: '.$carrinho1->exibirStatus();