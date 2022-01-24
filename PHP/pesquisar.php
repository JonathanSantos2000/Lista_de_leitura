<?php
include 'header.php';
?>
<?php

include_once('config.php');
if (isset($_POST['submit'])) {
    $_SESSION['search'] = $_POST['search-txt'];
}

$pesquisar = $_SESSION['search'];

//Verifica se esta sendo passado na url a pagina atual, senão é atribuido a pagina  
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

//selecionar todos os livros do acervo lidos pela pessoa
$result_pesquisa = "SELECT * FROM acervo WHERE nomeLivro LIKE '%" . str_replace(' ', '%', $pesquisar) . "%'";

$resultado_pesquisa = mysqli_query($conexao, $result_pesquisa);

//Contar o total de livros do acervo cadastrados pela pessoa
$total_Livros = mysqli_num_rows($resultado_pesquisa);

//Setar a quantidade de livros por pagina
$qt_livros_pg = 4;

//calcular o numero de paginas
$num_paginas = ceil($total_Livros / $qt_livros_pg);

//Calcular o inicio da visualização
$inicio = ($qt_livros_pg * $pagina) - $qt_livros_pg;

//selecionar os cursos a serem apresentados na pagina

$selecionar_livro = "SELECT * FROM acervo WHERE nomeLivro LIKE '%" . str_replace(' ', '%', $pesquisar) . "%' limit $inicio, $qt_livros_pg";

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
            <?php while ($rows_livros = mysqli_fetch_array($result_selecionar_livro)) { ?>
                <div class="livros flex-conteiner justify-self-center">
                    <img src=" <?php echo $rows_livros['linkImg'] ?> " alt="">
                    <div class="conteudoLivro flex-conteiner flex-direction-column justify-self-center justify-content-space-around">
                        <div>
                            <h1 id="tituloLivro"><?php echo $rows_livros['nomeLivro'] ?></h1>
                        </div>
                        <div class='infLivros flex-conteiner justify-content-space-around'>
                            <div class="lineL">
                                <h4>Tipo:<?php echo  $rows_livros['tipo'] ?></h4>
                                <h4>Autor: <?php echo $rows_livros['autor'] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php
            //verificar a pagina anterior e posterior
            $pagina_anterior = $pagina - 1;
            $pagina_posterior = $pagina + 1;
            ?>
            <div class="navPagination">
                <ul class="pagination">
                    <li>
                        <?php
                        if ($pagina_anterior != 0) { ?>
                            <a href="../PHP/pesquisar.php?pagina=<?php echo $pagina_anterior ?>">Anterior</a>
                        <?php } ?>
                    </li>
                    <!-- Paginas -->
                    <?php for ($i = 1; $i < $num_paginas + 1; $i++) { ?>
                        <li><a href="../PHP/pesquisar.php?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php } ?>
                    <!-- Próximo -->
                    <li>
                        <?php
                        if ($pagina_posterior <= $num_paginas) { ?>
                            <a href="../PHP/pesquisar.php?pagina=<?php echo $pagina_posterior ?>">Próximo</a>
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