<?php

namespace src\interfaces;

use src\componentes\log;

interface ILog {
    public function registrarLog(Log $log);
}