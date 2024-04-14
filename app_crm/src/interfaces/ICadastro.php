<?php

namespace src\interfaces;

use src\componentes\log;
use src\componentes\Notificacao;

interface ICadastro {
    public function salvar();
    public function registrarLog(Log $log);
    public function enviarNotificacao(Notificacao $notificacao);
}