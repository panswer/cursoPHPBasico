<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        /* iniciar variable */
        // $nombre;
        /* Iniciar variable y asignar valor */
        $nombre="Ricardo";
        /* 
            En PHP no se indica el tipo de variable
        */
        $edad=18;
        /* 
            para concatenar en PHP se utiliza '.'
        */
        // print "El nombre del usuario es " . $nombre;
        // print "El nombre del usuario es $nombre";
        /* 
            Si se utiliza comillas simples las variables en el string no seran reconocidas
            print 'El nombre del usuario es $nombre';
        */
        /* 
            Se puede concatenar en echo de la misma forma que con print
        */
        echo "El nombre es $nombre y tiene de edad " . $edad;
        /* 
            echo permita separar variables por medio de ','
            echo $nombre,$edad;

            print siempre retorna 1

            echo consume menos recursos que print
        */
    ?>
</body>
</html>