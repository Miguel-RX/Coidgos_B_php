<?php

    $arreglo_de_frutas = array("Naranga" , "Mandarina" , "Platano" , "Durazno");

    //For, Foreach, while, do wile

    /*for(inicio; fin; incremrento o deremento)

    */

    /*for($i = 1; $i <= 10; $i++){
        echo "<h3>
        $i
        </h3>";
    }
    */
    //Ej 1 mostrar los 100 primeros numeros pares

    /*
    for($i = 0; $i <= 3; $i++){
        echo "<h3>
        $arreglo_de_frutas[$i]
        </h3>";
    }

    */
    /*
    foreach($arreglo_de_frutas as $fruta){
        echo "<h3>
        $fruta
        </h3>";
    }
    */

    //Clases

    class Cuadrado {
        private $lado = 0;

        public function __construct($lado = 8){
            $this-> lado = $lado;
        }

        public function getArea(){
            return $this-> lado * $this->lado;
        }
    }

    //instanciacion

    $cuadrado  = new Cuadrado(6);

    echo "El area del cuadrado es: " . $cuadrado-> getArea();

    $cuadrado2 = new Cuadrado();


    





?>          