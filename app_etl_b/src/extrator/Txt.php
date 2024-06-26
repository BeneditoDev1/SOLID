<?php

namespace src\extrator;

use src\Arquivo;

class Txt extends Arquivo {
    
    public function lerArquivo(string $caminho): array {
        
        $handle = fopen($caminho, 'r');

        while(!feof($handle)){
            $linha = fgets($handle);
            $this->setDados(
                substr($linha, 11, 30), 
                substr($linha, 0, 11), 
                $linha, 41, 50
            );
        }
        fclose($handle);

        return $this->getDados();
    }
}