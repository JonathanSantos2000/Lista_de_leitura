<?php
session_start();
if (isset($_POST['submit'])) {
    include_once('config.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE nome='$username' and senha='$password'";

    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['id']);
        header('Location: login.php');
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        $fetch = mysqli_fetch_object($result);
        $_SESSION["idUsuario"] = $fetch->idUsuario;
        echo $_SESSION["idUsuario"];
        header('Location: index.php');
    }
} else {
    header('Location: login.php');
}
