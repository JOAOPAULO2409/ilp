<?php

$login = $_POST["login"];
$senha = $_POST["senha"];

if($login == "admin" && $senha == "123"){
    if(!isset($_SESSION))
        session_start();
    $_SESSION["logado.html"] =true;
    header("Location: logado.html");
}
else
    header("Location:index.php");

?>