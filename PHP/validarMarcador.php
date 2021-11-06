<?php
session_start();
include_once('config.php');
$idLivro = $_SESSION["idLivro"];
$status = $_SESSION["status"];

$lido = 0;
$lendo = 0;
$queroLer = 0;
$parei = 0;

$sql = "SELECT * FROM marcador WHERE idacervo='$idLivro'";

$result = $conexao->query($sql);

if (mysqli_num_rows($result) < 1) {
    switch ($status) {
        case 'lido':
            $lido++;
            break;
        case 'lendo':
            $lendo++;
            break;
        case 'queroLer':
            $queroLer++;
            break;
        case 'parei':
            $parei++;
            break;
    }

    $addMarcador = mysqli_query($conexao, "INSERT INTO marcador(idacervo, lido, lendo, quero_ler, parei)
    VALUES ('$idLivro','$lido','$lendo','$queroLer','$parei')");
    header('Location: verificar_livro.php');
} else {
}
