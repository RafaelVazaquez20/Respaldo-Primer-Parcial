<!--Icono del sitio web-->
<link rel="icon" href="../Logo UTL.ico" type="image/x-ico" />
<link rel="shortcut icon" type="image/x-icon" href="../Logo UTL.ico" />
<link rel="stylesheet" href="../css/style.css">
<nav>
    <a href="../index.php">Regresar al inicio</a>
</nav>
<br><br>
<?php
for ($i=0; $i < 15; $i++) { 
    echo ($i + 1 ).' - ';
    for($j=0;$j<($i+1);$j++)
    {
        if($i<5)
        {
            echo "1";
        }
        if($i>=5 && $i<11)
        {
            echo "2";
        }
        if($i>=11 && $i< 15)
        {
            echo "3";
        }
    }
    echo "<br>";
}
?>