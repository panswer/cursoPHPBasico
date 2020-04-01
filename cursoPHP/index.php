<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    // function dameDatos(){
    //     echo "Este es el mensaje del interior de la funcion <br>";
    // }
    ?>
    <?php
        /* Include se utiliza para poder utilizar codigo externo de un archivo php */
        include("proporcionaDatos.php");
        echo "Este es el primer mensaje <br>";
        echo "Este es el segundo mensaje <br>";
        dameDatos();
        /* 
            require => Detiene el flujo si nose encuentra el archivo
            include => No detiene el flujo si no se encuentra el archivo
        */
    ?>
</body>
</html>