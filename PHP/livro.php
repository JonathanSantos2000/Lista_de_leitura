<?php
include '../PHP/include/header.php';
?>

<?php
include_once('config.php');

/* Selecionar livro*/
$id = (int)$_GET['id'];
$selecionar_livro = "SELECT * FROM acervo WHERE id_acervo =  $id";
$result_selecionar_livro = $conexao->query($selecionar_livro);

/* Calculo marcadores */
$selecionar_mark = "SELECT SUM(`qt_leu`) as qt_leu,SUM(`qt_lendo`) as qt_lendo,SUM(`qt_Querem_ler`) as qt_Querem_ler,SUM(`qt_Parou`) as qt_Parou FROM marcador 
WHERE id_acervo = $id
GROUP BY `id_acervo`";
$result_selecionar_mark = $conexao->query($selecionar_mark);



if (mysqli_num_rows($result_selecionar_mark) < 1) {
    $qt_leu = 0;
    $qt_lendo = 0;
    $qt_Querem_ler = 0;
    $qt_Parou = 0;
} else {
    while ($mark_data = mysqli_fetch_assoc($result_selecionar_mark)) {
        $qt_leu = $mark_data['qt_leu'];
        $qt_lendo = $mark_data['qt_lendo'];
        $qt_Querem_ler = $mark_data['qt_Querem_ler'];
        $qt_Parou = $mark_data['qt_Parou'];
    }
}


?>

<?php
include '../PHP/include/menu.php';
?>
<main>
    <div class="conteudoPgLivro">
        <?php while ($acervo_data = mysqli_fetch_assoc($result_selecionar_livro)) { ?>
            <div class="contPgLivro">
                <div class="imgPgLivro traco">
                    <img src="<?php echo $acervo_data['url_img']; ?>" alt="...">
                </div>
                <div class="textoPgLivro">
                    <div class="titlePgLivro">
                        <h1><?php echo $acervo_data['nm_titulo'] ?></h1>
                    </div>
                    <div class="descPgLivro">
                        <div class="carrosselIcons">
                            <div class="titleIconsPgLivro ">
                                <h5>Autor:</h5>
                            </div>
                            <div class="iconPgLivro">
                                <img src="../IMG/icon_autor.png" alt="">
                            </div>
                            <div class="subTitleIconsPgLivro">
                                <h5><?php echo $acervo_data['nm_autor'] ?></h5>
                            </div>
                        </div>
                        <div class="carrosselIcons">
                            <div class="titleIconsPgLivro ">
                                <h5>Número de páginas:</h5>
                            </div>
                            <div class="iconPgLivro">
                                <img src="../IMG/icon_qtPaginas.png" alt="">
                            </div>
                            <div class="subTitleIconsPgLivro">
                                <h5><?php echo $acervo_data['qt_paginas'] ?></h5>
                            </div>
                        </div>
                        <div class="carrosselIcons">
                            <div class="titleIconsPgLivro">
                                <h5>Editora:</h5>
                            </div>
                            <div class="iconPgLivro">
                                <img src="../IMG/icon_editora.png" alt="">
                            </div>
                            <div class="subTitleIconsPgLivro">
                                <h5><?php echo $acervo_data['nm_editora'] ?></h5>
                            </div>
                        </div>
                        <div class="carrosselIcons">
                            <div class="titleIconsPgLivro">
                                <h5>Data da publicação: </h5>
                            </div>
                            <div class="iconPgLivro">
                                <img src="../IMG/icon_calendario.png" alt="">
                            </div>
                            <div class="subTitleIconsPgLivro">
                                <h5><?php echo $acervo_data['dt_publicacao'] ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="sinopsePgLivro">
                        <h2>Sinopse:</h2><br><br>
                        <p><?php echo $acervo_data['tx_sinopse'] ?></p>
                    </div>
                    <form class="mark" action="validarAddLivro.php" method="post">
                        <input type="hidden" name="idlivro" value="<?php echo $acervo_data['id_acervo']; ?>">
                        <div class="marcadores">
                            <div>
                                <button type="none" name="mark" value="qt_leu">
                                    <img src="https://cdn-icons-png.flaticon.com/512/271/271205.png" alt="Já leram"><br>
                                    Já leram: <?php echo $qt_leu ?>
                                </button>
                            </div>
                            <div>
                                <button type="submit" name="mark" value="qt_lendo">
                                    <img src="https://cdn-icons-png.flaticon.com/512/159/159604.png" alt="Lendo"><br>
                                    Lendo: <?php echo $qt_lendo ?>
                                </button>
                            </div>
                            <div>
                                <button type="submit" name="mark" value="qt_Querem_ler">
                                    <img src="https://cdn-icons-png.flaticon.com/512/709/709631.png" alt="Querem ler"><br>
                                    Querem ler: <?php echo $qt_Querem_ler ?>
                                </button>
                            </div>
                            <div>
                                <button type="submit" name="mark" value="qt_Parou">
                                    <img src="https://cdn-icons-png.flaticon.com/512/25/25239.png" alt="Pararam"><br>
                                    Pararam:<?php echo $qt_Parou ?>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="comentarioPgLivro traco">
                <div class="comentar">
                    
                </div>
                <div class="comentarios">

                </div>
            </div>
        <?php } ?>
    </div>
</main>

<?php
include '../PHP/include/footer.php';
?>