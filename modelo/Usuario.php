<?php
include_once "Conexion.php";

class Usuario
{
    var $datos;
    var $mensaje;

    public function __construct()
    {
        // se va a conectar a la base de datos
        $db = new Conexion(); // $db ya no es una variable es un objeto
        $this->conexion = $db->pdo;
        // $this hace referencia al objeto que se crea en una instancia de clase
    }

    function Loguearse($username, $password)
    {
        $sql = "SELECT * FROM usuario WHERE user=:username and password=:password";
        $query = $this->conexion->prepare($sql);
        $query->execute(array(':username' => $username, ':password' => $password));
        $this->datos = $query->fetchAll(); // retorna objetos o no
        return $this->datos;
    }
    function buscar_piso_hab()
    {
        $sql = "SELECT id_piso, numero_piso FROM piso";
        $query = $this->conexion->prepare($sql);
        $query->execute();
        $this->datos = $query->fetchAll(); // retorna objetos o no
        if (!empty($this->datos)) {

            return $this->datos;
        } else {
            $this->mensaje = "Falta crear pisos";
            return $this->mensaje;
        }
    }
    function buscar_cat_hab()
    {
        $sql = "SELECT id_cat_habitaciones, nombre_categoria FROM cat_habitaciones";
        $query = $this->conexion->prepare($sql);
        $query->execute();
        $this->datos = $query->fetchAll(); // retorna objetos o no
        if (!empty($this->datos)) {

            return $this->datos;
        } else {
            $this->mensaje = "Falta crear categorias";
            return $this->mensaje;
        }
    }
    function crear_habitaciones($n_habitacion, $habs_piso, $habs_cat)
    {
        $sql = "INSERT INTO habitaciones(n_cuarto, categoria, piso, estado) VALUES (:n_cuarto, :categoria, :piso, :estado)";
        $query = $this->conexion->prepare($sql);
        try {
            $query->execute(array(":n_cuarto" => $n_habitacion, ":categoria" => $habs_cat, ":piso" => $habs_piso, ":estado" => 1));
            $this->mensaje = "add-habs";
            return $this->mensaje;
        } catch (\Throwable $error) {
            $this->mensaje = "no-add-habs";
            return $this->mensaje;
        }
    }
    function crear_cat_habitaciones($categoria_nombre, $categoria_precio)
    {
        $sql = "INSERT INTO cat_habitaciones(nombre_categoria, precio) VALUES (:nombre_categoria, :precio)";
        $query = $this->conexion->prepare($sql);
        try {
            $query->execute(array(":nombre_categoria" => $categoria_nombre, ":precio" => $categoria_precio));
            $this->mensaje = "add-cat-habs";
            return $this->mensaje;
        } catch (\Throwable $error) {
            $this->mensaje = "no-add-cat-habs";
            return $this->mensaje;
        }
    }
    function crear_piso_habitaciones($piso_nombre)
    {
        $sql = "INSERT INTO piso(numero_piso) VALUES (:numero_piso)";
        $query = $this->conexion->prepare($sql);
        try {
            $query->execute(array(":numero_piso" => $piso_nombre));
            $this->mensaje = "add-piso-habs";
            return $this->mensaje;
        } catch (\Throwable $error) {
            $this->mensaje = "no-add-piso-habs";
            return $this->mensaje;
        }
    }
    function buscar_habitaciones()
    {
        if (!empty($_POST['id_habitacion'])) {
            $consulta = $_POST["id_habitacion"];
            $sql = "SELECT HAB.id_habitaciones, C_HAB.precio, ES.nombre_estado, HAB.n_cuarto, C_HAB.nombre_categoria, PS.numero_piso, PS.numero_piso FROM habitaciones as HAB inner join cat_habitaciones as C_HAB on HAB.categoria=C_HAB.id_cat_habitaciones inner join piso as PS on HAB.piso=PS.id_piso inner join estado_habitacion as ES on HAB.estado=ES.id_estado_habitacion WHERE HAB.id_habitaciones=:id_habitacion";
            $query = $this->conexion->prepare($sql);
            $query->execute(array(":id_habitacion" => $consulta));
            $this->datos = $query->fetchAll(); // retorna objetos o no
            if (!empty($this->datos)) {

                return $this->datos;
            } else {
                $this->mensaje = "No existen registro de habitaciones";
                return $this->mensaje;
            }
        } else {
            $sql = "SELECT HAB.id_habitaciones, C_HAB.precio, ES.nombre_estado, HAB.n_cuarto, C_HAB.nombre_categoria, PS.numero_piso, PS.numero_piso FROM habitaciones as HAB inner join cat_habitaciones as C_HAB on HAB.categoria=C_HAB.id_cat_habitaciones inner join piso as PS on HAB.piso=PS.id_piso inner join estado_habitacion as ES on HAB.estado=ES.id_estado_habitacion";
            $query = $this->conexion->prepare($sql);
            $query->execute();
            $this->datos = $query->fetchAll(); // retorna objetos o no
            if (!empty($this->datos)) {

                return $this->datos;
            } else {
                $this->mensaje = "No existen registro de habitaciones";
                return $this->mensaje;
            }
        }
    }
}
