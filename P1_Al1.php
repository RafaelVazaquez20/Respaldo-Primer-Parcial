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
    //Este es un comentatio lineal
    /*
    este es otro comentario
    este es otro comentario
    */
    //-----------------------------------------
    echo "<br><strong>Impresión desde PHP</strong><br>";
    $variable = 1;
    $variable = "Hola";
    $variable = 1.234;
    echo $variable . "<br>";
    //----------------------------------------------
    echo "<br><strong>Operaciones aritméticas</strong><br>";
    echo 1 + 1 . "<br>";
    echo 3 - 1 . "<br>";
    echo 2 * 3 . "<br>";
    echo 10 / 5 . "<br>";
    echo 10 %  7 . "<br>";
    echo "12" + "12" . "<br>";

    //------------------------------------------------------
    echo "<br><strong>Validación IF</strong><br>";
    if (is_bool(false)) {
        echo "es booleano";
    } else {
        echo "no es booleano";
    }

    if (is_null($variable)) {
        echo "Es nulo<br>";
    } else {
        echo "es booleano";
    }
    //is_null, is_bool,   is_float
    //is_int , is_string, is_object
    //---------------------------------------
    echo "<br><strong>Verificar declaración</strong><br>";
    if (isset($variable)) {
        echo "Sí está declarada <br>";
    } else {
        echo "No está declarada <br>";
    }
    $variable = 1.234;
    echo var_dump($variable);
    ?>
    <hr>
    <br>
    <footer>
        <h3>Ricardo Rafael Delgado Vázquez</h3>
    </footer>
</body>

</html>