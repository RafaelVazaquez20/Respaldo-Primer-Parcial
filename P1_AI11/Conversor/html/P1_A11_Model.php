<?php
class ModeloMedidas
{
    //Centimetros
    public function Cm_M($_medida)
    {
        $resultado = $_medida / 100;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=centímetros&resultado=' . doubleval($resultado) . "&texto=metros");
    }
    public function  Cm_Inch($_medida)
    {
        $resultado = $_medida / 2.54;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=centímetros&resultado=' . doubleval($resultado) . "&texto=pulgadas");
    }

    public function Cm_Yd($_medida)
    {
        $resultado = $_medida * 0.010936;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=centímetros&resultado=' . doubleval($resultado) . "&texto=yardas");
    }
    //Metros
    public function M_Cm($_medida)
    {
        $resultado = $_medida * 100;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=metros&resultado=' . doubleval($resultado) . "&texto=centímetros");
    }
    public function M_Inch($_medida)
    {
        $resultado = $_medida * 39.370;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=metros&resultado=' . doubleval($resultado) . "&texto=pulgadas");
    }
    public function M_Yd($_medida)
    {
        $resultado = $_medida * 1.0936;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=metros&resultado=' . doubleval($resultado) . "&texto=yardas");
    }
    //Pulgadas
    public function Inch_Cm($_medida)
    {
        $resultado = $_medida * 2.54;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=pulgadas&resultado=' . doubleval($resultado) . "&texto=centímetros");
    }
    public function Inch_M($_medida)
    {
        $resultado = $_medida / 39.37;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=pulgadas&resultado=' . doubleval($resultado) . "&texto=metros");
    }
    public function Inch_Yd($_medida)
    {
        $resultado = $_medida /36;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=pulgadas&resultado=' . doubleval($resultado) . "&texto=yardas");
    }
    //Yardas
    public function Yd_Cm($_medida)
    {
        $resultado = $_medida * 91.44;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=yardas&resultado=' . doubleval($resultado) . "&texto=centímetros");
    }
    public function Yd_M($_medida)
    {
        $resultado = $_medida / 1.0936;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=yardas&resultado=' . doubleval($resultado) . "&texto=metros");
    }
    public function Yd_Inch($_medida)
    {
        $resultado = $_medida * 36;
        header('location: P1_A11.php?longNum1=' . doubleval($_GET['longNum1']) . '&medida=yardas&resultado=' . doubleval($resultado) . "&texto=pulgadas");
    }
    public function reset()
    {
        header('location: P1_A11.php');
    }
}

class Pesos
{
    //Gramos
    public function G_Kg($_medida)
    {
        $resultado = $_medida / 1000;
        header('location: P1_A11.php?pesoNum1=' . doubleval($_GET['pesoNum1']) . '&pesos=Gramos&resultado1=' . doubleval($resultado) . "&texto1=Kilogramos");
    }
    public function G_Oz($_medida)
    {
        $resultado =  $_medida / 28.35;
        header('location: P1_A11.php?pesoNum1=' . doubleval($_GET['pesoNum1']) . '&pesos=Gramos&resultado1=' . doubleval($resultado) . "&texto1=Onzas");
    }
    //Kilogramos
    public function Kg_G($_medida)
    {
        $resultado = $_medida * 1000;
        header('location: P1_A11.php?pesoNum1=' . doubleval($_GET['pesoNum1']) . '&pesos=Kilogramos&resultado1=' . doubleval($resultado) . "&texto1=Gramos");
    }
    public function Kg_Oz($_medida)
    {
        $resultado = $_medida * 35.274;
        header('location: P1_A11.php?pesoNum1=' . doubleval($_GET['pesoNum1']) . '&pesos=Kilogramos&resultado1=' . doubleval($resultado) . "&texto1=Onzas");
    }
    //Onzas
    public function Oz_G($_medida)
    {
        $resultado = $_medida * 28.35;
        header('location: P1_A11.php?pesoNum1=' . doubleval($_GET['pesoNum1']) . '&pesos=Onzas&resultado1=' . doubleval($resultado) . "&texto1=Gramos");
    }
    public function Oz_Kg($_medida)
    {
        $resultado = $_medida / 35.274;
        header('location: P1_A11.php?pesoNum1=' . doubleval($_GET['pesoNum1']) . '&pesos=Onzas&resultado1=' . doubleval($resultado) . "&texto1=Kilogramos");
    }
    public function reset()
    {
        header('location: P1_A11.php');
    }
}

class Volumenes
{
    //Litros-Mililitros
    public function L_Ml($_medida)
    {
        $resultado = $_medida * 1000;
        header('location: P1_A11.php?volNum1=' . doubleval($_GET['volNum1']) . '&volumen=Litros&resultado2=' . doubleval($resultado) . "&texto2=Mililitros");
    }
    //Litros Metros Cúbicos
    public function L_M3($_medida)
    {
        $resultado = $_medida / 1000;
        header('location: P1_A11.php?volNum1=' . doubleval($_GET['volNum1']) . '&volumen=Litros&resultado2=' . doubleval($resultado) . "&texto2=Metros cúbicos");
    }
    //Mililitros-Litros
    public function Ml_L($_medida)
    {
        $resultado = $_medida / 1000;
        header('location: P1_A11.php?volNum1=' . doubleval($_GET['volNum1']) . '&volumen=Mililitros&resultado2=' . doubleval($resultado) . "&texto2=Litros");
    }
    //Mililitros-Metros Cúbicos
    public function Ml_M3($_medida)
    {
        $resultado = $_medida / 1000000;
        header('location: P1_A11.php?volNum1=' . doubleval($_GET['volNum1']) . '&volumen=Mililitros&resultado2=' . doubleval($resultado) . "&texto2=Metros Cúbicos");
    }
    //Metros Cúbicos-Litros
    public function M3_L($_medida)
    {
        $resultado = $_medida * 1000;
        header('location: P1_A11.php?volNum1=' . doubleval($_GET['volNum1']) . '&volumen=Metros Cúbicos&resultado2=' . doubleval($resultado) . "&texto2=Litros");
    }
    //Metros Cúbicos-Mililitros
    public function M3_Ml($_medida)
    {
        $resultado = $_medida * 1000000;
        header('location: P1_A11.php?volNum1=' . doubleval($_GET['volNum1']) . '&volumen=Metros Cúbicos&resultado2=' . doubleval($resultado) . "&texto2=Mililitros");
    }
    public function reset()
    {
        header('location: P1_A11.php');
    }
}