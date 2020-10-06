<?php
$metodo = $_SERVER["REQUEST_METHOD"];
//echo $metodo ."<br>";

if($metodo!="POST")
{
    http_response_code(405);
    die("Method Not Allowed");
}
if (isset($_POST['nombre'])) {
    $nombreRecibido = $_POST['nombre'];
}
if (isset($_GET['nombre'])) {
    $nombreRecibido = $_GET['nombre'];
}
echo $nombreRecibido;
