<?php
include 'header.php';
?>

<?php
include_once('config.php');
$_SESSION['search'] = "";
//Verifica se esta sendo passado na url a pagina atual, senão é atribuido a pagina  
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

//selecionar todos os livros do acervo lidos pela pessoa
$selecionar_acervo = "SELECT * FROM  acervo";
$result_selecionar_acervo = $conexao->query($selecionar_acervo);

//Contar o total de livros do acervo cadastrados pela pessoa
$total_Livros = mysqli_num_rows($result_selecionar_acervo);

//Setar a quantidade de livros por pagina
$qt_livros_pg = 9;

//calcular o numero de paginas
$num_paginas = ceil($total_Livros / $qt_livros_pg);

//Calcular o inicio da visualização
$inicio = ($qt_livros_pg * $pagina) - $qt_livros_pg;

//selecionar os cursos a serem apresentados na pagina

$selecionar_livro = "SELECT * FROM  acervo limit $inicio, $qt_livros_pg";

$result_selecionar_livro = $conexao->query($selecionar_livro);

?>
<?php
include 'menu.php';
?>
<main>
    <div class="conteiner flex-conteiner">
        <?php
        include 'filtro.php';
        ?>
        <div class="containerLivro">
            <div class="row">
                <?php while ($acervo_data = mysqli_fetch_assoc($result_selecionar_livro)) { ?>
                    <div class="col-sm-4 col-md-4">
                        <div class="bookObject">
                            <div class="imgLivroBiclioteca">
                                <img src="<?php echo $acervo_data['linkImg']; ?>" alt="...">
                            </div>
                            <div class="infBook">
                                <h1><?php echo $acervo_data['nomeLivro'] ?></h1>
                                <?php
                                $idUsuario = $_SESSION['idUsuario'];
                                $idLivro = $acervo_data['id'];
                                $sql = "SELECT * FROM `livro` WHERE idusuarios ='$idUsuario' AND idacervo = '$idLivro'";

                                $result = $conexao->query($sql);
                                if (mysqli_num_rows($result) < 1) {
                                ?>
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $acervo_data['id'] ?>">
                                        <button name="salvar" id="salvar">
                                            <span class="icone">
                                                <ion-icon name="add-circle-outline"></ion-icon>
                                            </span>
                                            SALVAR NA SUA LISTA
                                        </button>
                                    </form>
                                <?php } else { ?>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $acervo_data['id'] ?>">
                                        <button name="submit-biblioteca" id="submit-biblioteca">
                                            <span class="icone">
                                                <ion-icon name="add-circle-outline"></ion-icon>
                                            </span>
                                            ATUALIZAR CADASTRO
                                        </button>
                                    </form>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php
            //verificar a pagina anterior e posterior
            $pagina_anterior = $pagina - 1;
            $pagina_posterior = $pagina + 1;
            $max_links = 2;
            ?>
            <div class="flex-conteiner justify-content-rigth">
                <ul class="pagination">
                    <!-- Anterior -->
                    <li>
                        <?php
                        if ($pagina_anterior != 0) { ?>
                            <a href="../PHP/acervo_livros.php?pagina=<?php echo $pagina_anterior ?>">Anterior</a>
                        <?php } ?>
                    </li>
                    <!-- Paginas 2 antes-->
                    <?php for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
                        if ($pag_ant >= 1) { ?>
                            <li>
                                <a href="../PHP/biblioteca.php?pagina=<?php echo $pag_ant ?>"><?php echo $pag_ant ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                    <!-- Pagina atual-->
                    <li id="pgAtual">
                        <a href="../PHP/biblioteca.php?pagina=<?php echo $pagina ?>" style="background: aquamarine;">
                            <?php echo $pagina ?>
                        </a>
                    </li>
                    <!-- Paginas  2 depois-->
                    <?php for ($pag_dep = $pagina + 1; $pag_dep <=  $pagina + $max_links; $pag_dep++) {

                        if ($pag_dep <= $num_paginas) { ?>
                            <li>
                                <a href="../PHP/biblioteca.php?pagina=<?php echo $pag_dep ?>"><?php echo $pag_dep ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                    <!-- Próximo -->
                    <li>
                        <?php
                        if ($pagina_posterior <= $num_paginas) { ?>
                            <a href="../PHP/biblioteca.php?pagina=<?php echo $pagina_posterior ?>">Próximo</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
        <?php
        include 'mais_lidos.php';
        ?>
    </div>
</main>


<?php
include 'footer.php';
?>