<?php

class Carro{

public $cor;
public $portas;
public $VelocidadeMax;
public $VelocidadeAtual;

        function MostrarVelocidade()
        {
            echo $this->VelocidadeAtual;

        }

        function acelerar($a,$t)
        {
            $this->VelocidadeAtual =
            $this->VelocidadeAtual + $a * $t;

        }
        function Frear($a, $t)
        {
            $this->VelocidadeAtual =
            $this->VelocidadeAtual - $a * $t;

        }
        function virar($lado)
        {
            echo"Virando para".$lado;

        }
}
?>