<?php
include_once "../modelo/Usuario.php";
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

echo $username . $password;
$usuario = new Usuario();

$usuario->Loguearse($username, $password);

if (!empty($usuario->datos)) {

    foreach ($usuario->datos as $dato) {
        $_SESSION["id_usuario"] = $dato->id_usuario;
        $_SESSION["nombres"] = $dato->nombre . " " . $dato->apellido;
    }
    header("Location: ../views/GestionHotel/");
} else {
    $_SESSION["error"] = "EL usuario o contraseña es incorrecto";
    header("Location: ../Login.php");
}
