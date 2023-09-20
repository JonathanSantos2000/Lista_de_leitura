<?php
session_start();
include_once('config.php');

function verificaMark($botaoClicado, $status)
{
    if ($botaoClicado === $status) {
        return true;
    } else {
        return false;
    }
}
function marcacao($newStatus)
{
    switch ($newStatus) {
        case 'qt_leu':
            $arrayStatus = [1, 0, 0, 0];
            break;
        case 'qt_lendo':
            $arrayStatus = [0, 1, 0, 0];
            break;
        case 'qt_Querem_ler':
            $arrayStatus = [0, 0, 1, 0];
            break;
        case 'qt_Parou':
            $arrayStatus = [0, 0, 0, 1];
            break;
    }
    return $arrayStatus;
}
function returnPagina($id_livro)
{
    $url = "livro.php?id=$id_livro";
    header("Location: $url");
}
if (isset($_POST["mark"])) {
    $id = $_POST['idlivro'];
    /* Vericar se esta logado*/
    if ((!isset($_SESSION['username']) == true)) {
        returnPagina($id);
    } else {
        $id_usuario = $_SESSION["idUsuario"];
        $botaoClicado = $_POST["mark"];
        $id_mark = 0;
        /* Verificar se o usuario ja marcou esse item*/
        $ver_mark = "SELECT * FROM marcador WHERE id_acervo =  $id AND id_usuario = $id_usuario";
        $result_ver_mark = $conexao->query($ver_mark);
        $arrayStatus = [0, 0, 0, 0];

        if (mysqli_num_rows($result_ver_mark) < 1) {
            $arrayStatus = marcacao($botaoClicado);
            /* Não marcado */
            $result = mysqli_query($conexao, "INSERT INTO `marcador` (`id_usuario`, `id_acervo`, `qt_leu`, `qt_lendo`, `qt_Querem_ler`, `qt_Parou`)
            VALUES ('$id_usuario', '$id', '$arrayStatus[0]', '$arrayStatus[1]', '$arrayStatus[2]', '$arrayStatus[3]')");
            returnPagina($id);
        } else {
            /* Já Marcado */
            while ($mark_data = mysqli_fetch_assoc($result_ver_mark)) {
                $arrayStatus[0] = $mark_data['qt_leu'];
                $arrayStatus[1] = $mark_data['qt_lendo'];
                $arrayStatus[2] = $mark_data['qt_Querem_ler'];
                $arrayStatus[3] = $mark_data['qt_Parou'];
                $id_mark = $mark_data['id_marcador'];
            }
            echo '<br>' . $arrayStatus[0] . ', ' . $arrayStatus[1] . ', ' . $arrayStatus[2] . ', ' . $arrayStatus[3];

            if ($arrayStatus[0] == 1) {
                if (verificaMark($botaoClicado, "qt_leu")) {
                    returnPagina($id);
                } else {
                    $arrayStatus = marcacao($botaoClicado);
                    $result = mysqli_query($conexao, "UPDATE `marcador` SET `qt_leu` = '$arrayStatus[0]', `qt_lendo` = '$arrayStatus[1]', `qt_Querem_ler` = '$arrayStatus[2]', `qt_Parou` = '$arrayStatus[3]' 
                    WHERE `marcador`.`id_marcador` = $id_mark");
                }
            } else if ($arrayStatus[1] == 1) {
                if (verificaMark($botaoClicado, "qt_lendo")) {
                    returnPagina($id);
                } else {
                    $arrayStatus = marcacao($botaoClicado);
                    $result = mysqli_query($conexao, "UPDATE `marcador` SET `qt_leu` = '$arrayStatus[0]', `qt_lendo` = '$arrayStatus[1]', `qt_Querem_ler` = '$arrayStatus[2]', `qt_Parou` = '$arrayStatus[3]' 
                    WHERE `marcador`.`id_marcador` = $id_mark");
                }
            } else if ($arrayStatus[2] == 1) {
                if (verificaMark($botaoClicado, "qt_Querem_ler")) {
                    returnPagina($id);
                } else {
                    echo "qt_Querem_ler";
                    $arrayStatus = marcacao($botaoClicado);
                    $result = mysqli_query($conexao, "UPDATE `marcador` SET `qt_leu` = '$arrayStatus[0]', `qt_lendo` = '$arrayStatus[1]', `qt_Querem_ler` = '$arrayStatus[2]', `qt_Parou` = '$arrayStatus[3]' 
                    WHERE `marcador`.`id_marcador` = $id_mark");
                }
            } else if ($arrayStatus[3] == 1) {
                if (verificaMark($botaoClicado, "qt_Parou")) {
                    returnPagina($id);
                } else {
                    echo "opção parei";
                    $arrayStatus = marcacao($botaoClicado);
                    $result = mysqli_query($conexao, "UPDATE `marcador` SET `qt_leu` = '$arrayStatus[0]', `qt_lendo` = '$arrayStatus[1]', `qt_Querem_ler` = '$arrayStatus[2]', `qt_Parou` = '$arrayStatus[3]' 
                    WHERE `marcador`.`id_marcador` = $id_mark");
                }
            }
            returnPagina($id);
        }
    }
} else {
    header("Location: biblioteca.php");
}
