<?php
if(!isset($_SESSION))
    session_start();

if(!iseet($_SESSION["logado"]))
    header("Location:index.php");
?>