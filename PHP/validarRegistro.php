<?php
if (isset($_POST['submit'])) {

    if ($_POST['password'] == $_POST['confirmPassword']) {
        /* print_r($_POST['username']);
        print_r('<br>');
        print_r($_POST['password']);
        print_r('<br>');
        print_r($_POST['confirmPassword']); */

        /*----------------------------------*/
        include_once('config.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha)
         VALUES ('$username','$password')");
         header('Location: login.php');
    }
} else {
    header('Location: registro.php');
}

?>