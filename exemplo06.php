<?php

class Contra
{
    public $numero;
    public $saldo;

    function __construct($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
    }
}