<?php 

    class NomeDaClasse{

        public $atributo1;
        public $atributo2;
        //...
        public $atributoN;
        //METODO SEM PASSAGEM DE PARAMETRO E SEM RETORNO.
        function metodo1(){
            //algoritmo metodo 1. No exemplo:
            echo "Executando o metodo 1";
        }

        //metodo com passagem de parametro
        function metodo2($x,$y){
            $this->atributo1 = $x.$y;

        }
        //...

        //metodo com passagem de parametro.
        function metodoN($x,$y,$z){
            //algoritmo metodo N.
            $this->atributo2 = $x.$y.$z;
            if(strlen($this->atributo2)>strlen($this->atributo1)){
                $retorno=$this->atributo2;
            }
            else
            {
                $retorno=$this->atributo1;
            }
            //metodo com retorno
            return($retorno);
            }
        }
        