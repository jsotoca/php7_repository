<?php
    declare(strict_types = 1);
    function calcularDescuento(float $monto, float &$impuesto):void{
        $impuesto = $monto*0.18;
    }
    $monto = 120.00;
    $impuesto = 0.00;
    calcularDescuento($monto,$impuesto);
    print sprintf("El monto es: %.2f\n",$monto);
    print sprintf("El descuento es: %.2f\n",$impuesto);
    print sprintf("El total a pagar es: %.2f",($monto+$impuesto));
    