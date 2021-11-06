<?php
session_start();
include_once('config.php');
if (isset($_POST['submit'])) {

        $localLido = $_POST['locaLivro'];
        $status = $_POST['status'];
        $idUsuario = $_SESSION["idUsuario"];
        $idLivro = $_SESSION["idLivro"];
        $pagsCaps = $_POST['nPaginas'];

        $sql = "SELECT * FROM livro WHERE idusuarios='$idUsuario' and idacervo='$idLivro'";

        $result = $conexao->query($sql);

        if (mysqli_num_rows($result) < 1) {
                $_SESSION['status'] = $status;

                $addLivro = mysqli_query($conexao, "INSERT INTO livro(link,statusLeitura, idusuarios, idacervo, pagsCaps)
                VALUES ('$localLido','$status','$idUsuario','$idLivro','$pagsCaps')");

                header('Location: validarMarcador.php');
        } else {
                echo 'Você ja possui esse livro em sua biblioteca';
        }
} else {
        header('Location: verificar_livro.php');
}
