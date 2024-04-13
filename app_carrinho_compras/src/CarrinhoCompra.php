<?php

namespace App;

class CarrinhoCompra{
    
    //atributos
    private $itens;
    private $status;
    private $valorTotal;

    //métodos
    public function __construct()
    {
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItens(){
        return $this->itens;
    }

    public function adicionarItem(string $item, float $valor){
        array_push($this->itens, ["item" => $item, "valor" => $valor]);
        $this->valorTotal += $valor;
        return true;
    }
    
    public function exibirValorTotal(){
        return $this->valorTotal;
    }

    public function exibirStatus(){
        return $this->status;
    }

    public function confirmaPedido() {

        if($this->validarCarrinho()){
            $this->status = 'confirmado';
            $this->enviarEmailConfirmacao();

            return true;
        }
        
        return false;
    }

    public function enviarEmailConfirmacao(){
        echo '<br/>... envia e-mail de confirmacao...<br/>';
    }

    public function validarCarrinho(){
        return count($this->itens) > 0;
    }

}