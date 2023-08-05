<?php

class Retangulo {
    //criamos os atributos com os modificadores de acesso do tipo private
    private $largura;
    private $altura;

    //metodo construtor
    function __construct($largura, $altura){
        $this->largura = $largura;
        $this->altura = $altura;
    }

    function calcular_area(){
        return $this->largura * $this->altura;
    }

    function calcular_perimetro(){
        return 2*$this->largura + 2*$this->altura;
    }
    
    
}