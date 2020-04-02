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
         }

         /* Instancia */
        $renault = new Coche();
        $mazda = new Coche();
        $seat = new Coche();

        $mazda->Girar();

        echo $mazda->ruedas;
    ?>
</body>

</html>