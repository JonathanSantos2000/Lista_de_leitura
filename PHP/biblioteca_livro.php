<?php
include 'header.php';
?>

<?php
include_once('config.php');

//Verifica se esta sendo passado na url a pagina atual, senão é atribuido a pagina  
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

//selecionar todos os livros do acervo lidos pela pessoa
$selecionar_acervo = "SELECT * FROM  acervo a
WHERE a.tipo='livros'";
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

$selecionar_livro = "SELECT * FROM  acervo a
WHERE a.tipo='livros' limit $inicio, $qt_livros_pg";

$result_selecionar_livro = $conexao->query($selecionar_livro);

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
            <div class="row">
                <?php while ($acervo_data = mysqli_fetch_assoc($result_selecionar_livro)) { ?>
                    <div class="col-sm-4 col-md-4">
                        <div class="bookObject">
                            <div class="imgLivroBiclioteca">
                                <img src="<?php echo $acervo_data['linkImg']; ?>" alt="...">
                            </div>
                            <div class="infBook">
                                <h1><?php echo $acervo_data['nomeLivro'] ?></h1>
                                <form action="existe_livro.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $acervo_data['id'] ?>">
                                    <input type="submit" id="salvar" name="salvar" value="SALVAR NA SUA LISTA">
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
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
                            <a href="../PHP/biblioteca_livro.php?pagina=<?php echo $pagina_anterior ?>">Anterior</a>
                        <?php } ?>
                    </li>
                    <!-- Paginas -->
                    <?php for ($i = 1; $i < $num_paginas + 1; $i++) { ?>
                        <li><a href="../PHP/biblioteca_livro.php?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php } ?>
                    <!-- Próximo -->
                    <li>
                        <?php
                        if ($pagina_posterior <= $num_paginas) { ?>
                            <a href="../PHP/biblioteca_livro.php?pagina=<?php echo $pagina_posterior ?>">Próximo</a>
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