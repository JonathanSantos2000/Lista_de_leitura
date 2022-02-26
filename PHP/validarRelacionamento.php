<?php
session_start();
include_once('config.php');


if (isset($_POST['submit'])) {
        $idUsuario = $_SESSION["idUsuario"];
        $idLivro = $_SESSION["idLivro"];
        $selecionado = $_POST['localLido'];

        if ($selecionado == "fisico") {
                $localLido['localLido'] = $selecionado;
        } elseif ($selecionado == "online") {
                /* echo "livro lido em site web"; */
                if ($_POST["linkWeb"] != "") {
                        $localLido = $_POST['linkWeb'];
                        /*  echo "<br>" . $link; */
                } else {
                        /* echo "<br> Por favor coloque o link da pagina "; */
                }
        } else {
                /*       */
        }
        echo "<br><br>";

        $localLido = $_POST['linkWeb'];
        $status = $_POST['status'];
        $pagsCaps = $_POST['nPaginas'];
} else {
        $nome = $_SESSION['nomeLivro'];

        $sqlNomeLivro = "SELECT * FROM acervo WHERE nomeLivro='$nome'";

        $resultNome = $conexao->query($sqlNomeLivro);
        if (mysqli_num_rows($resultNome) < 1) {
        } else {
                while ($acervo_data = mysqli_fetch_assoc($resultNome)) {
                        $idLivro = $acervo_data['id'];
                }
        }
        $idUsuario = $_SESSION["idUsuario"];
        $localLido = $_SESSION['localLido'];
        $status = $_SESSION['status'];
        $pagsCaps = $_SESSION['pagsCaps'];
}


/* echo "idUsuario " . $idUsuario . "<br>";
echo "idLivro " . $idLivro . "<br>";
echo "localLido " . $localLido . "<br>";
echo "status " . $status . "<br>";
echo "pagsCaps " . $pagsCaps . "<br>"; */

$sql = "SELECT * FROM livro WHERE idusuarios='$idUsuario' and idacervo='$idLivro'";

$result = $conexao->query($sql);



if (mysqli_num_rows($result) < 1) {
        $_SESSION['status'] = $status;
        $_SESSION['idLivro'] = $idLivro;

        $addLivro = mysqli_query($conexao, "INSERT INTO livro(link,statusLeitura, idusuarios, idacervo, pagsCaps)
        VALUES ('$localLido','$status','$idUsuario','$idLivro','$pagsCaps')");

        header('Location: validarMarcador.php');
} else {
        echo 'Você ja possui esse livro em sua biblioteca';
}
