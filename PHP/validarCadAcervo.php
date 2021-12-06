
<?php
if (isset($_POST['submit'])) {
    session_start();
    include_once('config.php');

    $nome = $_POST['nomeLivro'];
    $img = $_POST['linkImg'];
    $tipo = $_POST['tipo'];
    $pagsCaps = $_POST['nPaginas'];
    $autor = $_POST['nomeAutor'];

    $status = $_POST['status'];

    $_SESSION['nomeLivro'] = $nome;
    $_SESSION['status'] = $status;
    $_SESSION['pagsCaps'] = $pagsCaps;

    $sql = "SELECT * FROM acervo WHERE nomeLivro='$nome'";

    $result = $conexao->query($sql);

    $selecionado = $_POST['localLido'];
    if ($selecionado == "fisico") {
        $_SESSION['localLido'] = $selecionado;
    } elseif ($selecionado == "online") {
        /* echo "livro lido em site web"; */
        if ($_POST["linkWeb"] != "") {
            $_SESSION['localLido'] = $_POST["linkWeb"];
            /* echo "<br>" . $link; */
        } else {
            echo "<br> Por favor coloque o link da pagina ";
        }
    } else {
        echo "Por favor selecione uma opção";
    }
    echo "<br><br>";

    if (mysqli_num_rows($result) < 1) {
        $addAcervo = mysqli_query($conexao, "INSERT INTO acervo(nomeLivro, linkImg, tipo, autor)
        VALUES ('$nome','$img','$tipo','$autor')");

         header('Location: validarRelacionamento.php');
    } else {
    }
} else {
    header('Location: adicionar.php');
}
