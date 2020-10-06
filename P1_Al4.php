<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades Individuales</title>
    <!--Icono del sitio web-->
    <link rel="icon" href="Logo UTL.ico" type="image/x-ico" />
    <link rel="shortcut icon" type="image/x-icon" href="Logo UTL.ico" />

    <meta name="theme-color" content="#53A6DC" />
    <style>
        * {
            margin: 0px;
        }

        body {
            font-family: "Times New Roman", Times, serif;
        }

        a {
            text-decoration: none;
        }

        nav {
            background-color: #338DFF;
            width: 100%;
            height: auto;
            position: sticky;
            padding-left: 10px;
            padding-bottom: 10px;
            padding-top: 10px;
        }

        nav a {
            text-decoration: none;
            color: whitesmoke;
            display: inline-table;
            margin-left: 20px;
            margin: 2px 3px 20px 3px;
        }

        nav a:hover {
            text-shadow: 3px 3px slategray;
            background-color: #338DDD;
            border-radius: 3%;
        }

        #Actividad_1_5::after {
            white-space: pre;
        }

        #Actividaades6::before {
            white-space: pre-line;
        }

        footer {
            background-color: #338DFF;
            width: 100%;
            height: 10vh;
            position: sticky;
        }

        footer h3 {
            color: white;
            font-family: Verdana;
            font-weight: normal;
            top: 10px;
        }
    </style>
</head>

<body>
    <nav>
        <br>
        <a id="href" href="index.php">Inicio</a>
    </nav>

    <?php
    //-----------------------------------------
    echo "<br><strong>If</strong></br>";

    for ($i = 0; $i <= 5; $i++) :
        echo "$i <br>";
    endfor;

    //-----------------------------------------
    echo "<br><strong>If Inverso</strong></br>";

    for ($i = 5; $i >= 0; $i--) :
        echo "$i <br>";
    endfor;

    //------------------------------------------
    echo "<br><strong>While</strong><br>";
    $ciclos  = 0;
    while ($ciclos <= 5) :
        $ciclos++;
        echo "$ciclos<br>";
    endwhile;

    //---------------------------------------------
    echo "<br><strong>Do While</strong><br>";
    $ciclos = 0;
    do {
        $ciclos++;
        echo "$ciclos<br>";
    } while ($ciclos < 3);

    //---------------------------------------------
    echo "<br><strong>Arreglos</strong><br>";
    $arrNuevo = [1, "a", 3, 3.455, true];
    echo var_dump($arrNuevo);
    echo "<br>";

    //--------------------------------------------------
    echo "<br><strong>Agregar al Inicio</strong><br>";
    array_push($arrNuevo, "Var1");
    echo var_dump($arrNuevo);
    echo "<br>";

    //----------------------------------------------------
    echo "<br><strong></strong><br>";
    array_unshift($arrNuevo, "Var2");
    echo var_dump($arrNuevo);
    echo "<br>";


    //----------------------------------------------------
    echo "<br><strong>Eliminar un elemento</strong><br>";
    unset($arrNuevo[2]);
    echo var_dump($arrNuevo);
    echo "<br>";

    //-----------------------------------------------------
    echo "<br><strong>Conteo de elementos</strong><br>";
    $nElementos = count($arrNuevo);
    echo "$nElementos<br>";

    //-------------------------------------------------------
    echo "<br><strong>Fusionar Array Elementos</strong><br>";
    $arr1 = [1, 2, 3];
    $arr2 = [1, 3, 5, 4];
    $arrMerge = array_merge($arr1, $arr2);
    echo var_dump($arrMerge);
    echo "<br>";

    //-----------------------------------------------------
    echo "<br><strong>Voltear Elemento</strong><br>";
    $arrMerge = array_reverse($arrMerge);
    echo var_dump($arrMerge);
    echo "<br>";

    //-----------------------------------------------------
    echo "<br><strong></strong><br>";
    $arr1 = [1, 2, 3];
    $arr2 = [1, 3, 5, 4];
    $arrMerge = array_replace($arr1, $arr2);
    echo var_dump($arrMerge);
    echo "<br>";

    //-----------------------------------------------------
    echo "<br><strong>Ordenar Ascendente Elemento</strong><br>";
    sort($arrMerge);
    echo var_dump($arrMerge);
    echo "<br>";

    //-----------------------------------------------------
    echo "<br><strong>Ordenar Descendente Elemento</strong><br>";
    rsort($arrMerge);
    echo var_dump($arrMerge);
    echo "<br>";


    //--------------------------------------------------------
    echo "<br><strong>Verificar si se encuentra un elemento</strong><br>";
    if (in_array(2, $arrMerge)) {
        echo "Sí se encontró<br>";
    } else {
        echo "No se encontro<br>";
    }


    //---------------------------------------------------------
    echo "<br><strong>Foreach linean(datos)</strong><br>";
    $numeros = [1, 2, 3, "a", array(6, 7, 8), array(9, 20)];
    foreach ($numeros as $item) {

        if (is_array($item)) {
            foreach ($item as $subitem) {
                echo "$subitem<br>";
            }
        } else {
            echo "$item<br>";
        }
    }

    //---------------------------------------------------------
    echo "<br><strong>Arreglo asociativo</strong><br>";
    $asociativo =
        [
            "edad"   => 21,
            "nombre" => "Rafael",
            "tel"    => "4771642028"
        ];
    echo $asociativo["edad"] . "<br>";
    echo $asociativo["nombre"] . "<br>";
    echo $asociativo["tel"] . "<br>";

    echo "<br><br><br>";
    foreach ($asociativo as $key => $valor) {
        echo "$key - $valor <br>";
    }
    ?>
    <hr>
    <br>
    <footer>
        <h3>Ricardo Rafael Delgado Vázquez</h3>
    </footer>
</body>

</html>