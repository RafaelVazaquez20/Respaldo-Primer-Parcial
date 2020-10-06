<title>Actividad Individual 5</title>
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
echo "<br><h1><strong>1.- Impresión de la siguiente secuencia mediante un ciclo</strong></h1></br>";

for ($i = 1; $i <= 5; $i++) 
{
    for ($j = 1; $j <= $i; $j++) 
    {
    echo $j;
    }
    echo"<br>";
}
echo "<br><hr>";
//-----------------------------------------
echo "<br><h1><strong>2.- Impresión de la siguiente secuencia mediante un ciclo</strong></h1></br>";

for($i=1;$i<=7;$i++)
{
    for($j=1;$j<7-$i;$j++)
    {
        echo $j;
    }
    echo "<br>";
}
echo "<hr>";

//---------------------------------------
echo "<br><h1><strong>3.- Imprimir los días del calendario</strong></h1></br>";

$meses = [ 
    1=>  "Enero" ,
    2=>  "Febrero" , 
    3=>  "Marzo" , 
    4=>  "Abril" , 
    5=>  "Mayo" , 
    6=>  "Junio" , 
    7=>  "Julio" , 
    8=>  "Agosto" , 
    9=>  "Septiembre" , 
    10=> "Octubre" , 
    11=> "Noviembre" , 
    12=> "Diciembre" ];

    function MesCon28() {for($j=1;$j<=28;$j++)echo $j;}
    function MesCon30() {for($j=1;$j<=30;$j++)echo $j;}
    function MesCon31() {for($j=1;$j<=31;$j++)echo $j;}
    for($i=1;$i<=12;$i++)
    { 
        switch($i)
        {
            case 1:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br>"; break;
            case 2:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon28(); echo "<br>"; break;
            case 3:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br>"; break;
            case 4:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon30(); echo "<br>"; break;
            case 5:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br>"; break;
            case 6:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon30(); echo "<br>"; break;
            case 7:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br>"; break;
            case 8:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br>"; break;
            case 9:  echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon30(); echo "<br>"; break;
            case 10: echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br>"; break;
            case 11: echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon30(); echo "<br>"; break;
            case 12: echo "<label><strong>$meses[$i] : </strong></label>" ; MesCon31(); echo "<br>"; break;
        }
    }
   
echo "<br><hr>";
//------------------------------------------------------------------------------------------------------
echo "<br><h1><strong>4.- Imprimir pirámide dinámica</strong></h1><br>";
for ($i = 1; $i <= 9; $i++) 
{
    
    for ($j = 9; $j>= $i; $j--) 
    {
        echo "=";
    }
    //--
    $k1 = "";
    for ($k = 1; $k <= $i; $k++) 
    {
        $k1 = $k1. "$k"; 
    }
    echo strrev($k1);
    for ($l = 2; $l<= $i;  $l++) 
    {
        echo $l;
    }
    //--
    for ($m = 9; $m>= $i; $m--) 
    {
        echo "=";
    }
    echo"<br>";
}

echo "<hr>";
//---------------------------------------------------------------------------
echo "<br><h1><strong>5.- Imprimir la misma pirámide pero en un rombo</strong></h1><br>";
//  
for ($i = 1; $i <= 9; $i++) 
{
    
    for ($j = 9; $j>= $i; $j--) 
    {
        echo "=";
    }
    //--
    $k1 = "";
    for ($k = 1; $k <= $i; $k++) 
    {
        $k1 = $k1. "$k"; 
    }
    echo strrev($k1);
    for ($l = 2; $l<= $i;  $l++) 
    {
        echo $l;
    }
    //--
    for ($m = 9; $m>= $i; $m--) 
    {
        echo "=";
    }
    echo"<br>";
}
 for ($i = 9; $i >= 1; $i--) 
{
    
    for ($j = 9; $j>= $i; $j--) 
    {
        echo "=";
    }
    //--
    $k1 = "";
    for ($k = 1; $k <= $i; $k++) 
    {
        $k1 = $k1. "$k"; 
    }
    echo strrev($k1);
    for ($l = 2; $l<= $i;  $l++) 
    {
        echo $l;
    }
    //--
    for ($m = 9; $m>= $i; $m--) 
    {
        echo "=";
    }
    echo"<br>";
}
?>
<hr>
<br>
<footer>
    <h3>Ricardo Rafael Delgado Vázquez</h3>
</footer>