
<?php
if (isset($_POST['submit'])) {
    session_start();
    include_once('config.php');

    $nome = $_POST['nomeLivro'];
    $img = $_POST['linkImg'];
    $tipo = $_POST['tipo'];
    $pagsCaps = $_POST['nPaginas'];
    $autor = $_POST['nomeAutor'];

    $localLido = $_POST['locaLivro'];
    $status = $_POST['status'];

    $_SESSION['nomeLivro'] = $nome;
    $_SESSION['localLido'] = $localLido;
    $_SESSION['status'] = $status;

    $sql = "SELECT * FROM acervo WHERE nomeLivro='$nome'";

    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) == 1) {
        echo "Livro ja cadastrado";
        header('Location: validarRelacionamento.php');
    } else {
        $addAcervo = mysqli_query($conexao, "INSERT INTO acervo(nomeLivro, linkImg, tipo, pagsCaps, autor)
        VALUES ('$nome','$img','$tipo','$pagsCaps','$autor')");
         header('Location: validarRelacionamento.php');
    }
} else {
    header('Location: registro.php');
}
