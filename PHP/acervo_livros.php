<?php
include '../PHP/include/header.php';
include_once('config.php');
$id_usuario = 0;
if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
} else {
    $id_usuario = $_SESSION["idUsuario"];
}

//Verifica se esta sendo passado na url a pagina atual, senão é atribuido a pagina  
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

//selecionar todos os livros do acervo lidos pela pessoa
$selecionar_acervo = "SELECT * FROM marcador M 
INNER JOIN acervo A
ON M.id_acervo = A.id_acervo
WHERE M.id_usuario = $id_usuario";
$result_selecionar_acervo = $conexao->query($selecionar_acervo);

//Contar o total de livros do acervo cadastrados pela pessoa
$total_Livros = mysqli_num_rows($result_selecionar_acervo);

//Setar a quantidade de livros por pagina
$qt_livros_pg = 15;

//calcular o numero de paginas
$num_paginas = ceil($total_Livros / $qt_livros_pg);

//Calcular o inicio da visualização
$inicio = ($qt_livros_pg * $pagina) - $qt_livros_pg;

//selecionar os cursos a serem apresentados na pagina

$selecionar_livro = "SELECT * FROM marcador M 
INNER JOIN acervo A
ON M.id_acervo = A.id_acervo
WHERE M.id_usuario = $id_usuario
limit $inicio, $qt_livros_pg";

$result_selecionar_livro = $conexao->query($selecionar_livro);
?>

<?php
include '../PHP/include/menu.php';
?>
<main>
    <section class="conteinerMarcacoes">
        <fieldset>
            <legend>Minhas Marcações</legend>
            <div class="livrosMarcacoes">
                <?php while ($acervo_data = mysqli_fetch_assoc($result_selecionar_livro)) { ?>
                    <div class="cardBiblio">
                        <div class="imagem">
                            <img src="<?php echo $acervo_data['url_img']; ?>" alt="...">
                        </div>
                        <div class="texto">
                            <div class="pra">
                                <a href="../PHP/livro.php?id=<?php echo $acervo_data['id_acervo'] ?>">
                                    <?php echo $acervo_data['nm_titulo'] ?>
                                </a>
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
                                <a href="../PHP/acervo_livros.php?pagina=<?php echo $pag_ant ?>"><?php echo $pag_ant ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                    <!-- Pagina atual-->
                    <li id="pgAtual">
                        <a href="../PHP/acervo_livros.php?pagina=<?php echo $pagina ?>" style="background: aquamarine;">
                            <?php echo $pagina ?>
                        </a>
                    </li>
                    <!-- Paginas  2 depois-->
                    <?php for ($pag_dep = $pagina + 1; $pag_dep <=  $pagina + $max_links; $pag_dep++) {

                        if ($pag_dep <= $num_paginas) { ?>
                            <li>
                                <a href="../PHP/acervo_livros.php?pagina=<?php echo $pag_dep ?>"><?php echo $pag_dep ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                    <!-- Próximo -->
                    <li>
                        <?php
                        if ($pagina_posterior <= $num_paginas) { ?>
                            <a href="../PHP/acervo_livros.php?pagina=<?php echo $pagina_posterior ?>">Próximo</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </fieldset>
    </section>
</main>

<?php
include '../PHP/include/footer.php';
?>