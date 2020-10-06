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
    include('P1_Al9_Controlador.php');
    ?>
    <br>
    <table border="1">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
        </thead>
        <tbody>
            <?php
            foreach($mUsuarios as $rowUsuario)
            {
                echo "<tr>
                        <td>$rowUsuario->id</td>
                        <td>$rowUsuario->nombre</td>
                        <td>$rowUsuario->edad</td>
                     </tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <hr>
    <br>
    <footer>
        <h3>Ricardo Rafael Delgado Vázquez</h3>
    </footer>
</body>

</html>