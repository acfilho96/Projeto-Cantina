<?php
if (!isset($_SESSION)) session_start();
if(!$_SESSION['usuario']){
    header("Location: ./View/Login.php");
    exit();
}