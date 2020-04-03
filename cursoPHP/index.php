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
        $semana[]="Lunes";
        $semana[]="Martes";
        $semana[]="Miercoles";
        $semana[]="Jueves";
        /* 
            Se puede rellenar array sin utilizar indixe (Su efecto es como un push). De igual forma se pueden ingresar valores indicando el index, teniendo en cuenta que los indices que no sean definidos marcaran error si se llega a tocar alguno
        */
        /* Otra forma de crear un array indexado */
        // $semana=array("Lunes","Martes","Miercoles");
        // echo $semana[2];

        /* Array asociativo */
        // $datos=array("Nombre"=>"Ricardo","Apellido"=>"Mejias","Edad"=>22);
        // echo $datos["Apellido"];
        // $datos="Martin";

        // if(is_array($datos)){
        //     echo "Es un array";
        // }else{
        //     echo "No es un array";
        // }
        
        /* Recorrer array asociativo */
        // foreach($datos as $clave=>$valor){
        //     echo "A $clave le corresponde $valor <br>";
        // }

        /* Recorrer array indexado */
        // for($i=0;$i<count($semana);$i++){
        //     echo $semana[$i] . "<br>";
        // }

        /* Agregar un elemento en array indexado */
        // $semana[]="Viernes";
        // for($i=0;$i<count($semana);$i++){
        //     echo $semana[$i] . "<br>";
        // }

        /* Agregar un elemento en array asociativo */
        // $datos["Pais"]="Venezuela";
        // foreach($datos as $clave=>$valor){
        //     echo "El $clave tiene $valor <br>";
        // }

        /* ordenar elemento de array indexado */
        sort($semana);
        for($i=0;$i<count($semana);$i++){
            echo $semana[$i] . "<br>";
        }
    ?>
</body>

</html>