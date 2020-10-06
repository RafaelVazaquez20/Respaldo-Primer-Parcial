<?php
include_once('P1_Al9_BDConfig.php');
include_once('P1_Al9_BDConnection.php');

class Usuario
{
    public $id;
    public $nombre;
    public $edad;

    function __construct()
    { }

    //Guardar la información
    function save()
    {
        try {
            $dbConnection = new DBConnection();
            if ($this->id) {
                $sql          = "UPDATE cusuario SET nombre = :nombre,edad = :edad WHERE id = :id";
                $statement    = $dbConnection->conexion->prepare($sql);
                $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
                $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
                $statement->bindParam(":id",$this->id,PDO::PARAM_INT);
                $statement->execute();
            } else {
                $sql          = "INSERT INTO cusuario (nombre,edad) VALUES (:nombre, :edad)";
                $statement    = $dbConnection->conexion->prepare($sql);
                $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
                $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
                $statement->execute();
                $this->id     = intval($dbConnection->conexion->lastInsertId());
            }
            $dbConnection->cierraConexion();
            return true;
        } catch (PDOException $e) {
            echo "Error al insertar " . $e->getMessage();
            return false;
        }
    }

    public static function buscarUsuario($id)
    {
        try {
            $dbConnection = new DBConnection();
            $sql = "SELECT * FROM cusuario WHERE id = :id";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->execute([":id" => $id]);

            //Opción 1
            $rowS = $statement->fetchAll();
            $miUsuario = null;

            foreach ($rowS as $row) {
                //Almacenar en un objeto los valores.
                $miUsuario = new Usuario();
                $miUsuario->id     = intval($row["id"]);
                $miUsuario->nombre = $row["nombre"];
                $miUsuario->edad   = intval($row["edad"]);

               // echo "<strong>ID:     </strong> " . intval($row["id"]) . "<br>";
               // echo "<strong>Nombre: </strong> " . $row["nombre"] . "<br>";
               // echo "<strong>Edad:   </strong> " . intval($row["edad"]) . "<br><br>";
            }
            //Opción 2
            //$miUsuario = $statement->fetchObject('Usuario');
            $dbConnection->cierraConexion();
            return $miUsuario;
        } catch (Exception $e) {
            echo "Error al buscar" . $e->getMessage();
            return null;
        }
    }

    public static function all()
    {
        try {
            $dbConnection = new DBConnection();
            $sql = "SELECT * FROM cusuario";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->execute();
            $rowS = $statement->fetchAll();
            $usuarios = [];

            foreach ($rowS as $row) {
                //Almacenar en un objeto los valores.
                $miUsuario = new Usuario();
                $miUsuario->id     = intval($row["id"]);
                $miUsuario->nombre = $row["nombre"];
                $miUsuario->edad   = intval($row["edad"]);

               //  echo "<strong>ID:     </strong> " . $row["id"] . "<br>";
               // echo "<strong>Nombre: </strong> " . $row["nombre"] . "<br>";
               // echo "<strong>Edad:   </strong> " . $row["edad"] . "<br><br>";

                array_push($usuarios, $miUsuario);
            }
            $dbConnection->cierraConexion();
            return $usuarios;
        } catch (Exception $e) {
            echo "Error al buscar" . $e->getMessage();
            return null;
        }
    }

    public function delete()
    {
        try {
            $dbConnection = new DBConnection();
            $sql          = "DELETE FROM cusuario WHERE id =:id";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
            $statement->execute();
            $dbConnection->cierraConexion();
        } catch (PDOException $e) {
            echo "Error al eliminar :" . $e->getMessage();
            exit;
        }
    }
}
