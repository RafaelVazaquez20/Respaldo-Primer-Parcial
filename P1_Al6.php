<title>Actividad Individual 6</title>
 <!--Icono del sitio web-->
 <link rel="icon" href="Logo UTL.ico" type="image/x-ico"/>
<link rel="shortcut icon" type="image/x-icon" href="Logo UTL.ico" />
<meta name="theme-color" content="#083756" />
 
<style>
*{
    margin:0px;
}
nav 
{
    background-color: #338DFF;
    width: 100%;
    height: 10vh;
    position: sticky;
}
body
{
    font-family: "Times New Roman", Times, serif;
}
a
{
    text-decoration:none;
    color: white;
    margin-left: 30px;
    font-family: Verdana;
}
h1{
    color: #ABABAB;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: normal;
}
#espacio{
    background-color: burlywood;
}
footer
{
    background-color: #338DFF;
    width: 100%;
    height: 10vh;
    position: sticky;
}
footer h3
{
    color:white;
    font-family:Verdana;
    font-weight: normal;
    top: 10px;
}
</style>
<nav>
    <br>
    <a id="href" href="index.php">Inicio</a>
</nav>

<?php
//-----------------------------------------
 function ImprimirSalto()
 {
     echo "<br><strong>Impreso desde función</strong><br>";
 }
 ImprimirSalto();

 function Salto()
 {
     echo "<br><hr><br>";
 }
 Salto();
//----------------------------------------
 function Titulo($titulo)
 {
    echo "<br><strong>$titulo</strong><br>";
 }
 Titulo("Impreso desde parámetro");
 Salto();
 //------------------------------------------
 function getTitulo($titutlo)
 {
    return "<br><strong>$titutlo</strong><br>";
 }
 $tituloRegresado = getTitulo("Impreso desde valor");
 echo $tituloRegresado;
 Salto();

 //----------------------------------------------------
 function getTituloImprimiendo($titulo)
 {
    echo "<br><strong>Imprimiendo desde función</strong><br>";
    return "<br><strong>$titulo</strong><br>";
 }

 $titutloRegresado = getTituloImprimiendo("Impreso retornando valor");
 echo $titutloRegresado;
 Salto();
 //-----------------------------------------------------------
 function TituloDefault($titulo = "Título por defecto")
 {
    echo "<br><strong>$titulo</strong><br>";
 }
 TituloDefault();
 Salto();
 //----------------------
 $numero = 1;
 function SumaUno($numeroIngresado)
 {
     $numeroIngresado++;
     echo "$numeroIngresado<br>";
 }
 SumaUno($numero);
 echo $numero . "\tImpreso Externamente<br>";

 function sumaUnoPorReferencia(&$numeroEntrada)
 {
    $numeroEntrada++;
    echo "$numeroEntrada (impreso desde función sumaUnoRefrerencia)<br>";
 }

 sumaUnoPorReferencia($numero);
 echo $numero;
 $numero = 1;

 function sumaUnoEjercicio(&$numero)
 {
     $numero = $numero +  1;
 }
 sumaUnoEjercicio($numero);
 echo $numero;
?>
<br>
<footer>
    <h3>Ricardo Rafael Delgado Vázquez</h3>
</footer>