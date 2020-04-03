<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <!-- Codigo PHP -->
    <?php
        /* Array indexado */
        // $semana[]="Lunes";
        // $semana[]="Martes";
        // $semana[]="Miercoles";
        /* 
            Se puede rellenar array sin utilizar indixe (Su efecto es como un push). De igual forma se pueden ingresar valores indicando el index, teniendo en cuenta que los indices que no sean definidos marcaran error si se llega a tocar alguno
        */
        /* Otra forma de crear un array indexado */
        // $semana=array("Lunes","Martes","Miercoles");
        // echo $semana[2];

        /* Array asociativo */
        $datos=array("Nombre"=>"Ricardo","Apellido"=>"Mejias","Edad"=>22);
        echo $datos["Apellido"];
    ?>
</body>

</html>