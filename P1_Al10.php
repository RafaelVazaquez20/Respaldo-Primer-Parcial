<?php
$imports =
    [
        'css' => ['css/site.css'],
        'js'  => ['js/site.js']
    ];
include_once('layout/header.php');

?>
<a id="href" href="P1_Al10_2.php">Página 2</a>
<h1>Página 1</h1>
<form action="P1_A10_peticion.php" method="POST" autocomplete="off">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required />
    <br><br>
    <input type="number" name="edad" id="edad" placeholder="Edad" min="1" step="1" required/>
    <br><br>
    <button type="submit">Enviar</button>
</form>
<!--<button onclick="saludar()" id="button">Mostrar hola</button>-->
<?php include_once('layout/footer.php'); ?>