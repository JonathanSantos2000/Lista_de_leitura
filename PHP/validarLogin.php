<?php
session_start();
if (isset($_POST['submit'])) {
    include_once('config.php');
    /*     print_r($_POST['username']);
    print_r('<br>');
    print_r($_POST['password']); */

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuario WHERE nm_usuario='$username' and tx_password='$password'";

    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['id']);
        header('Location: login.php');
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        /*         $fetch = mysqli_fetch_object($result);
        $_SESSION["idUsuario"] = $fetch->id_usuario; */

        while ($usuario = mysqli_fetch_assoc($result)) {
            $_SESSION["idUsuario"] = $usuario['id_usuario'];
            /* echo 'id '.$_SESSION["idUsuario"]; */
            $_SESSION["nvUsuario"] = $usuario['nv_usuario'];
        }

        header('Location: index.php');
    }
} else {
    header('Location: login.php');
}
