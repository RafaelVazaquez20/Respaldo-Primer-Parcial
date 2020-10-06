<?php
include('P1_A11_Model.php');

if (isset($_GET['calcular'])) 
{
    //Primer número 
    $longitud1 = doubleval($_GET['longNum1']);
    //Objeto para calcular
    $Medidas = new ModeloMedidas;

    //Centímetros
    if      ($_GET['longitudes'] == "cm-m"   ) {$Medidas->Cm_M($longitud1)   ;} 
    else if ($_GET['longitudes'] == "cm-inch") {$Medidas->Cm_Inch($longitud1);}
    else if ($_GET['longitudes'] == "cm-yd"  ) {$Medidas->Cm_Yd($longitud1)  ;}
    //Metros
    else if ($_GET['longitudes'] == "m-cm"   ) {$Medidas->M_Cm($longitud1);   }
    else if ($_GET['longitudes'] == "m-inch" ) {$Medidas->M_Inch($longitud1) ;}
    else if ($_GET['longitudes'] == "m-yd"   ) {$Medidas->M_Yd($longitud1)   ;}
    //Pulgadas
    else if ($_GET['longitudes'] == "inch-cm") {$Medidas->Inch_Cm($longitud1);}
    else if ($_GET['longitudes'] == "inch-m" ) {$Medidas->Inch_M($longitud1) ;}
    else if ($_GET['longitudes'] == "inch-yd") {$Medidas->Inch_Yd($longitud1);}
    //Yardas
    else if ($_GET['longitudes'] == "yd-cm"  ) {$Medidas->Yd_Cm($longitud1)  ;}
    else if ($_GET['longitudes'] == "yd-m"   ) {$Medidas->Yd_M($longitud1)   ;}
    else if ($_GET['longitudes'] == "yd-inch") {$Medidas->Yd_Inch($longitud1);}
    else if ($_GET['reset']      == "reset"  ) {$Medidas->reset()            ;}     
}
if(isset($_GET['limpiarL']))
{
    $Medidas = new ModeloMedidas;
    $Medidas->reset()            ;
}
if(isset($_GET['calcularPesos']))
{
    //Peso a convertir
    $peso1 = doubleval($_GET['pesoNum1']);
    //Objeto para hacer las conversiones
    $Pesos = new Pesos;

    //Gramos
    if      ($_GET['pesos']=="G-Kg" )  {$Pesos->G_Kg($peso1) ;}
    else if ($_GET['pesos']=="G-Oz" )  {$Pesos->G_Oz($peso1) ;}
    //Kilogramos
    else if ($_GET['pesos']=="Kg-G" )  {$Pesos->Kg_G($peso1) ;}
    else if ($_GET['pesos']=="Kg-Oz")  {$Pesos->Kg_Oz($peso1);}
    //Onzas
    else if ($_GET['pesos']=="Oz-G" )  {$Pesos->Oz_G($peso1) ;}
    else if ($_GET['pesos']=="Oz-Kg")  {$Pesos->Oz_Kg($peso1);}

}
if(isset($_GET['limpiarP']))
{
    $Medidas = new Pesos;
    $Medidas->reset()            ;
}
if(isset($_GET['calcularVolumenes']))
{
    //Volúmen a convertir
    $volumen1 = doubleval($_GET['volNum1']);
    //Objeto para hacer las conversiones
    $Volumenes = new Volumenes;
    //Gramos
    if      ($_GET['volumenes']=="L-Ml" )  {$Volumenes->L_Ml($volumen1) ;}
    else if ($_GET['volumenes']=="L-M3" )  {$Volumenes->L_M3($volumen1) ;}
    //Kilogramos
    else if ($_GET['volumenes']=="Ml-L" )  {$Volumenes->Ml_L($volumen1) ;}
    else if ($_GET['volumenes']=="ML-M3")  {$Volumenes->Ml_M3($volumen1);}
    //Onzas
    else if ($_GET['volumenes']=="M3-L" )  {$Volumenes->M3_L($volumen1) ;}
    else if ($_GET['volumenes']=="M3-Ml")  {$Volumenes->M3_Ml($volumen1);} 
}
if(isset($_GET['limpiarV']))
{
    $Medidas = new Volumenes;
    $Medidas->reset()            ;
}