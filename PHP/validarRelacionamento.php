<?php
session_start();
include_once('config.php');

$localLido = $_SESSION['localLido'];
$status = $_SESSION['status'];
$idUsuario = $_SESSION['idUsuario'];
$nome = $_SESSION['nomeLivro'];

$sql = "SELECT * FROM acervo WHERE nomeLivro='$nome'";
$result = $conexao->query($sql);

$fetch = mysqli_fetch_object($result);
$_SESSION["idAcervo"] = $fetch->id;

$idAcervo = $_SESSION["idAcervo"];


$addLivro = mysqli_query($conexao, "INSERT INTO livro(link,statusLeitura, idusuarios, idacervo)
        VALUES ('$localLido','$status','$idUsuario','$idAcervo')");

header('Location: adicionar.php');
