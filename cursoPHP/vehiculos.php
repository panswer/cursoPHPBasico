<?php
class Coche{
    private $ruedas;
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
class Camion extends Coche{
    function Camion(){
        $this->ruedas=8;
        $this->color="Griss";
        $this->motor=2600;
    }
    function Establece_Color($color_camion,$nombre_camion){
        $this->color=$color_camion;
        echo "El color de $nombre_camion es: " . $this->color . "<br>";
    }
    function Arrancar(){
        parent::Arrancar();
        echo "Camion arrancado<br>";
    }
}
?>