<?php
include_once('P1_Al9_Usuario.php');

/**$miUsuario         = new Usuario();
$miUsuario->nombre = "Rafael";
$miUsuario->edad   = 21;
$miUsuario->save();
**/
//echo var_dump($miUsuario);

//Buscar un Usuario
$miUsuarioCargado = Usuario::buscarUsuario(2);

//Eliminar un Usuario
//$miUsuarioCargado->delete();

//Actualizar un Usuario
$miUsuarioCargado = Usuario::buscarUsuario(2);
if(isset($miUsuarioCargado))
{
    $miUsuarioCargado->nombre = "Rafael";
    $miUsuarioCargado->edad = 25;
    $miUsuarioCargado->save();
}

//Buscar tsodos los usuarios
$mUsuarios = Usuario::all();




