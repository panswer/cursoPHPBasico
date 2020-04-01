<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre="Ricardo";
        // include('funcion.php');
        function dameNombre(){
            /* 
                La instruccion global trae la informacion de la variable que se encuentra antes
            */
            global $nombre;
            $nombre="El nombre es $nombre";
        }
        dameNombre();
        echo $nombre;
    ?>
</body>
</html>