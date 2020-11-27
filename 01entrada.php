<?php 
    declare(strict_types = 1);
    
    function saludar(string $nombre) : string{
        return "hola ".$nombre;
    }
    function sumar(int $num1, int $num2) : int{
        return $num1 + $num2;
    }
    print saludar("Antonio");
    print sumar(1,2);
    
