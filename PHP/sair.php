<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
$_SESSION['idUsuario'] = "saiu";
header('Location: login.php');
