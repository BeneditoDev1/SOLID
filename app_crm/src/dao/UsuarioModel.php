<?php

namespace src\dao;

use src\BD;

use src\interfaces\ICadastro;
use src\interfaces\Ilog;
use src\interfaces\INotificacao;
 
use src\componentes\log;
use src\componentes\Notificacao;

class UsuarioModel extends BD implements ICadastro,Ilog ,INotificacao {
    public function salvar() {

    }

    public function registrarLog(log $log)
    {
        
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        
    }
}