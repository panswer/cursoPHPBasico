<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <!-- Codigo PHP -->
    <?php
        /* 
            Public => Accesible desde cualquier parte
            Private => Accesible desde la propia clase
            Protected => Accesible desde la propia clase y clases heredadas
        */
        include("concercionario.php");
        
        $compra_antonio = new Compra_Vehiculo("compacto");
        $compra_antonio->Climatizador();
        $compra_antonio->Tapiceria_Cuero("blanco");
        echo $compra_antonio->Get_Precio();

        $compra_Ana = new Compra_Vehiculo("compacto");
        $compra_Ana->Climatizador();
        $compra_Ana->Tapiceria_Cuero("rojo");
        echo $compra_Ana->Get_Precio();
    ?>
</body>

</html>