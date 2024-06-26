<?php

namespace src\poligonos;

class Quadrado {
    protected $largura;
    protected $altura;

    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;  
    }

    public function setAltura(float $altura): void
    {
        $this->largura = $altura;
        $this->altura = $altura;  
    }

    public function getLargura(): float{
        return $this->largura;
    }

    public function getAltura(): float{
        return $this->altura;
    }

    public function getArea(): float{
        return $this->getAltura() * $this->getLargura();
    }
}