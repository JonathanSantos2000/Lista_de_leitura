<?php
include 'header.php';
?>
<?php
include_once('config.php');
/* $result_pesquisa = "SELECT * FROM acervo WHERE nomeLivro LIKE '%$pesquisar%'"; */

$sqlInicio = "SELECT * FROM acervo";

$sqlFinal = "WHERE id='1'";

$sqlJucao = $sqlInicio . $sqlFinal;

$resultSql = $conexao->query($sqlJucao);

?>

<?php
include 'menu.php';
?>
<main>
    <div class="conteiner">
        <?php
        include 'filtro.php';
        ?>
        <div class="containerLivro">
            <?php while ($rows_livros = mysqli_fetch_array($resultSql)) {
                echo "<img src=" . $rows_livros['linkImg'] . " alt=''>";
            }
            ?>
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