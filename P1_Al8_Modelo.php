<?php

class Persona
{
    public $nombre;
    public $edad;
    public static $mayoriaEdad = 21;

    public function __construct() {  }

    public function Saluda()
    {
        echo "Hola mucho gusto, me llamo $this->nombre<br>";
    }

    public function RespondeSaludo($nombreInterlocultor)
    {
        echo "Hola mucho gusto $nombreInterlocultor, me llamo $this->nombre<br>";
    }

    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edadEntrada)
    {
        $this->edad = $edadEntrada;
    }

    public static function getMayoriaEdad()
    {
        echo self::$mayoriaEdad;
    }
}