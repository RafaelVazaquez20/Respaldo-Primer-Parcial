<?php
$imports =
    [
        'css' => ['css/site2.css'],
        'js'  => ['js/site2.js']
    ];
if (isset($_POST["miVariable"]))
{
    $miVariableEnPHP = $_POST["miVariable"];
    $miVariableEnPHP =+ 5;
}
else
{
    $miVariableEnPHP = 0;
}
include_once('layout/header.php');
?>
<a id="href" href="P1_Al10.php">Regresar a página 1</a>
<h1>Página 2</h1>
<!--<button onclick="saludar()" id="button">Mostrar hola</button>-->
<!--Inicia el formulario--> 
<form action="" method="post">
    <input type="number" name="miVariable" id="" value="<?php echo $miVariableEnPHP;?>"/><br>
</form>
<?php include_once('layout/footer.php'); ?>