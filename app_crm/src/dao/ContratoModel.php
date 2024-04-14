<?php

namespace src\dao;

use src\BD;
use src\componentes\log;
use src\interfaces\ICadastro;
use src\componentes\Notificacao;

class ContratoModel extends BD implements ICadastro{
    public function salvar() {

    }

    public function registrarLog(log $log)
    {
        
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        
    }
}