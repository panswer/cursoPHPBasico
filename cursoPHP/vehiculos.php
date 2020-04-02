<?php
class Coche{
    var $ruedas;
    var $color;
    var $motor;
    /* Constructor */
    function Coche(){
        $this->ruedas=4;
        $this->color="";
        $this->motor=1600;
    }
    function Arrancar(){
        echo "Estoy arrancando<br>";
    }
    function Girar(){
        echo "Estoy girando<br>";
    }
    function Frenar(){
        echo "Estoy frenando<br>";
    }
    function Establece_Color($color_coche,$nombre_coche){
        $this->color=$color_coche;
        echo ("El color de $nombre_coche es: " . $this->color . "<br>");
    }
}
/* --------------------------------- */
class Camion{
    var $ruedas;
    var $color;
    var $motor;
    /* Constructor */
    function Camion(){
        $this->ruedas=8;
        $this->color="Griss";
        $this->motor=2600;
     }
    function Arrancar(){
        echo "Estoy arrancando<br>";
    }
    function Girar(){
        echo "Estoy girando<br>";
    }
    function Frenar(){
        echo "Estoy frenando<br>";
    }
}
?>