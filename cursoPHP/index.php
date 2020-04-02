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
        include("vehiculos.php");
        /* Si el constructor no recibe parametros no es necesario los parametros */
        $mazda = new Coche();

        $pegaso = new Camion();

        echo "El mazda tiene " . $mazda->ruedas . " ruedas <br>";
        echo "El pegaso tiene " . $pegaso->ruedas . " ruedas <br>";
        
        // $pegaso->Establece_Color("Negro","Pegaso");
        // $pegaso->Arrancar();
    ?>
</body>

</html>