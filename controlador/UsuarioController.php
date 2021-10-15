<?php
include_once '../modelo/Usuario.php';
$usuario = new Usuario();
session_start();
$id_usuario = $_SESSION['id_usuario'];


if ($_POST["funcion"] == "crear_habitacion") {
    $n_habitacion = $_POST["n_habitacion"];
    $habs_piso = $_POST["habs_piso"];
    $habs_cat = $_POST["habs_cat"];
    $usuario->crear_habitaciones($n_habitacion, $habs_piso, $habs_cat);
    echo $usuario->mensaje;
}
if ($_POST["funcion"] == "crear_cat-habitacion") {
    $categoria_nombre = $_POST["categoria_nombre"];
    $categoria_precio = $_POST["categoria_precio"];
    $usuario->crear_cat_habitaciones($categoria_nombre, $categoria_precio);
    echo $usuario->mensaje;
}
if ($_POST["funcion"] == "crear_piso-habitacion") {
    $piso_nombre = $_POST["piso_nombre"];
    $usuario->crear_piso_habitaciones($piso_nombre);
    echo $usuario->mensaje;
}
if ($_POST["funcion"] == "buscar_habitacion") {
    $json = array();
    $usuario->buscar_habitaciones();
    if ($usuario->mensaje) {
        echo $usuario->mensaje;
    }
    if ($usuario->datos) {
        foreach ($usuario->datos as $dato) {
            $json[] = array(
                'id_habitaciones' => $dato->id_habitaciones,
                'n_cuarto' => $dato->n_cuarto,
                'precio' => $dato->precio,
                'nombre_categoria' => $dato->nombre_categoria,
                'numero_piso' => $dato->numero_piso,
                'estado' => $dato->nombre_estado
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
}
if ($_POST["funcion"] == "buscar_cat_hab") {
    $json = array();
    $usuario->buscar_cat_hab();
    if ($usuario->mensaje) {
        echo $usuario->mensaje;
    }
    if ($usuario->datos) {
        foreach ($usuario->datos as $dato) {
            $json[] = array(
                'id_categoria' => $dato->id_cat_habitaciones,
                'nombre_categoria' => $dato->nombre_categoria
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
}
if ($_POST["funcion"] == "buscar_piso_hab") {
    $json = array();
    $usuario->buscar_piso_hab();
    if ($usuario->mensaje) {
        echo $usuario->mensaje;
    }
    if ($usuario->datos) {
        foreach ($usuario->datos as $dato) {
            $json[] = array(
                'id_piso' => $dato->id_piso,
                'numero_piso' => $dato->numero_piso
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
}
