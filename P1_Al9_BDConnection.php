<?php
include_once('P1_Al9_BDConfig.php');
class DBConnection
{
    public $conexion ;
    function __construct()
    {
        try 
        {
            $this->conexion = new PDO("mysql:host=". BDConfig::$BDServer.";dbname=" . BDConfig::$BDName,BDConfig::$BDUser,BDConfig::$BDPassword);    
            $this->conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }
        catch (PDOException $e) 
        {
            echo "Error al conectar con la BD: " . $e->getMessage();
        }
    }

    public function cierraConexion()
    {
        $this->conexion = null;
    }


}