<?php

require ("carro.php");
require ("Retangulo.php");


class Fruta {
    //atributos da classe
    public $nome;
    public $cor;

    //metodos
    function __construct($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;
    }

    function set_nome($nome){

        if($nome == "Renato"){
            $this->nome = $nome; //o atributo da classe irá receber o nome
        }else{
            $this->nome = $nome;
        }
    }
    function set_cor($cor){
        $this->cor = $cor;
    }
    function get_nome(){
        return $this->nome;
    }
    function get_cor(){
        return $this->cor;
    }
}

//criação de um objeto do tipo maçã
$maca = new Fruta("maçã", "vermelho");
$banana = new Fruta("banana", "amarelo");
$mamao = new Fruta("mamao", "laranja");

// criação de um objeto do tipo carro
$carro1 =  new Carro ("Hyndai", "hb20", 2015);
echo "<br> Carro 1 - marca = ".$carro1->get_marca()."<br> modelo = ".$carro1->get_modelo()."<br> ano = ".$carro1->get_ano();

//criaçao de um objeto do tipo retangulo
$retangulo = new Retangulo (2,4);
echo "<br> Area do Retangulo = ".$retangulo->calcular_area();
echo "<br> Area do Perimetro = ".$retangulo->calcular_perimetro();


/*
//imprimir na tela o nome e a cor dos objetos
$maca->cor = "vermelho";
$maca->nome = "maçã";*/
echo "<br>".$maca->get_nome();
echo "<br>".$maca->get_cor();

/*$banana->cor = "amarela";
$banana->nome = "banana";*/
echo "<br>".$banana->get_nome();
echo "<br>".$banana->get_cor();

/*$mamao->cor = "laranja";
$mamao->nome = "mamão";*/
echo "<br>".$mamao->get_nome();
echo "<br>".$mamao->get_cor();

?>