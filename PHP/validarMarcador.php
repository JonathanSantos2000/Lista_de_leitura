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

    while ($acervo_data = mysqli_fetch_assoc($result)) {
        $idMarcador = $acervo_data['id'];
        $lido = $acervo_data['lido'];
        $lendo = $acervo_data['lendo'];
        $queroLer = $acervo_data['quero_ler'];
        $parei = $acervo_data['parei'];
    }
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
    echo $idMarcador;

    $sqlUpdate = "UPDATE marcador
    SET lido = '$lido', lendo = '$lendo',quero_ler = '$queroLer', parei = '$parei'
    WHERE id='$idMarcador'";

    $result = $conexao->query($sqlUpdate);

    header('Location: verificar_livro.php');
}
