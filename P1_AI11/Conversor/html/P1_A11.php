<!DOCTYPE html>
<html lang="en" onload="cargar();">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Medidas</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/forms.js"></script>
    <!--Icono del sitio web-->
    <link rel="icon" href="../../../Logo UTL.ico" type="image/x-ico" />
    <link rel="shortcut icon" type="image/x-icon" href="../../../Logo UTL.ico" />
</head>

<body onload="cargar();">
    <nav>
        <a class="a inicio" href="../../../index.php">Inicio</a>&#09; <a class="a" href="../../index.php">Volver</a>
    </nav>
    <h1>Conversor de Medidas</h1>
    <div>
        <legend id="legend1" onclick="longitudes();">Longitudes</legend>
        <hr>
        <div id="longitudes">
            <?php
            include('longitudes.php');
            if (isset($_GET['longNum1']) && isset($_GET['medida']) && isset($_GET['resultado']) && isset($_GET['texto'])) {
                echo "<legend id='echo'>" . $_GET['longNum1'] . " " . $_GET['medida'] . "<br>Resultado: " . doubleval($_GET['resultado']) . " " . $_GET['texto'] . "</legend>";
            } else {
                echo "<legend id='echo'>Ingrese un valores para comenzar</legend>";
            }
            ?>
        </div>

        <legend id="legend3" onclick="pesos();">Pesos</legend>
        <hr>
        <div id="pesos">
            <?php
            include('pesos.php');
            if (isset($_GET['pesoNum1']) && isset($_GET['pesos']) && isset($_GET['resultado1']) && isset($_GET['texto1'])) {
                echo "<legend id='echo'>" . $_GET['pesoNum1'] . " " . $_GET['pesos'] . "<br>Resultado: " . doubleval($_GET['resultado1']) . " " . $_GET['texto1'] . "</legend>";
            } else {
                echo "<legend id='echo'>Ingrese un valores para comenzar</legend>";
            }
            ?>
        </div>
        <br>
        <legend id="legend2" onclick="volumenes();">Volúmenes de Líquidos</legend>
        <hr>
        <div id="volumenes">
            <?php
            include('volumenes.php');
            if (isset($_GET['volNum1']) && isset($_GET['volumen']) && isset($_GET['resultado2']) && isset($_GET['texto2'])) {
                echo "<legend id='echo'>" . $_GET['volNum1'] . " " . $_GET['volumen'] . "<br>Resultado: " . doubleval($_GET['resultado2']) . " " . $_GET['texto2'] . "</legend>";
            } else {
                echo "<legend id='echo'>Ingrese un valores para comenzar</legend>";
            }
            ?>
        </div>
    </div>
</body>

</html>