<?php
session_start();
include_once("../configuracion.php");
unset($_SESSION["login"]);
unset($_SESSION["CodUsuarioLog"]);
unset($_SESSION["CodAl"]);
unset($_SESSION["Nivel"]);
unset($_SESSION["CodDocente"]);
session_destroy();
header("Location:$url$directory");
?>