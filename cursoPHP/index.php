<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <!-- Codigo PHP -->
    <?php
        /* Una dimension */
        $alimentos = array( "fruta"=>array("tropical"=>"kiwi",
                                            "citrico"=>"mandarina",
                                            "otros"=>"manzana"
                                        ),
                            "leche"=>array("animal"=>"vaca",
                                            "vegetal"=>"coco"
                                        ),
                            "carne"=>array("vacuno"=>"lomo",
                                            "porcino"=>"pata"
                                        )
                        );

        // echo $alimentos["carne"]["vacuno"];
        /* Recorrer un arreglo de mas de una dimension */
        /* foreach($alimentos as $clave_alim=>$alim){
            echo "$clave_alim:<br>";
            while(list($clave,$valor)=each($alim)){
                echo "$clave = $valor<br>";
            }
            echo "<br>";
        } */

        echo var_dump($alimentos);
    ?>
</body>

</html>