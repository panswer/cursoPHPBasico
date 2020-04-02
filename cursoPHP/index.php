<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <!-- Codigo PHP -->
    <?php
        /* Clase */
        // class Coche{
        //     var $ruedas;
        //     var $color;
        //     var $motor;
        //     /* Constructor */
        //     function Coche(){
        //         $this->ruedas=4;
        //         $this->color="";
        //         $this->motor=1600;
        //      }
        //     function Arrancar(){
        //         echo "Estoy arrancando<br>";
        //     }
        //     function Girar(){
        //         echo "Estoy girando<br>";
        //     }
        //     function Frenar(){
        //         echo "Estoy frenando<br>";
        //     }
        //     function Establece_Color($color_coche,$nombre_coche){
        //         $this->color=$color_coche;
        //         echo ("El color de $nombre_coche es: " . $this->color . "<br>");
        //     }
        // }
        /* Instancia */
        /* $renault = new Coche();
        $mazda = new Coche();
        $seat = new Coche();

        $renault->Establece_Color("Rojo","Renault");
        $seat->Establece_Color("Azul","Seat"); */

        // $mazda->Girar();

        // echo $mazda->ruedas;
        include("vehiculos.php");
        /* Si el constructor no recibe parametros no es necesario los parametros */
        $mazda = new Coche();

        $pegaso = new Camion();

        echo "El mazda tiene " . $mazda->ruedas . " ruedas <br>";
        echo "El pegaso tiene " . $pegaso->ruedas . " ruedas <br>";
        $pegaso->Establece_Color("Negro","Pegaso");

        $pegaso->Arrancar();
    ?>
</body>

</html>