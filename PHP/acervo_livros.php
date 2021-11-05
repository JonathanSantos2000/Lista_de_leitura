<?php
include 'header.php';
?>

<?php
$logado = '';
if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header('Location: login.php');
} else {
    $logado = ucfirst($_SESSION['username']);
}

?>

<?php
include_once('config.php');
$idUsuario = $_SESSION['idUsuario'];

//Verifica se esta sendo passado na url a pagina atual, senão é atribuido a pagina  
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

//selecionar todos os livros do acervo lidos pela pessoa
$selecionar_acervo = "SELECT * FROM usuarios u
JOIN livro l
on u.id = l.idusuarios
JOIN acervo a
on a.id = l.idacervo
WHERE u.id='$idUsuario' and a.tipo='livros'";
$result_selecionar_acervo = $conexao->query($selecionar_acervo);

//Contar o total de livros do acervo cadastrados pela pessoa
$total_Livros = mysqli_num_rows($result_selecionar_acervo);

//Setar a quantidade de livros por pagina
$qt_livros_pg = 4;

//calcular o numero de paginas
$num_paginas = ceil($total_Livros / $qt_livros_pg);

//Calcular o inicio da visualização
$inicio = ($qt_livros_pg * $pagina) - $qt_livros_pg;

//selecionar os cursos a serem apresentados na pagina

$selecionar_livro = "SELECT * FROM usuarios u
JOIN livro l
on u.id = l.idusuarios
JOIN acervo a
on a.id = l.idacervo
WHERE u.id='$idUsuario' and a.tipo='livros' limit $inicio, $qt_livros_pg";

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
            <?php while ($acervo_data = mysqli_fetch_assoc($result_selecionar_livro)) { ?>
                <div class='livros'>
                    <img src=" <?php echo  $acervo_data['linkImg'] ?>" alt=''>
                    <div class='conteudoLivro'>
                        <div>
                            <h1 id="tituloLivro"><?php echo $acervo_data['nomeLivro'] ?></h1>
                        </div>
                        <div class='infLivros'>
                            <div>
                                <h4>Tipo: <?php echo $acervo_data['tipo'] ?></h4>
                                <h4>Status: <?php echo $acervo_data['statusLeitura'] ?></h4>
                                <h4>Nº paginas lidas: <?php echo $acervo_data['pagsCaps'] ?></h4>
                                <h4>Autor: <?php echo $acervo_data['autor'] ?></h4>
                            </div>
                            <div>
                                <?php if ($acervo_data['link'] != 'livro fisico') { ?>
                                    <h4>Local de leitura:<a href="#<?php echo $acervo_data['link'] ?>">Leia aqui</a></h4>
                                <?php } else { ?>
                                    <h4>Lido em livro físicos</h4>
                                <?php } ?>
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
                            <a href="../PHP/acervo_livros.php?pagina=<?php echo $pagina_anterior ?>">Anterior</a>
                        <?php } ?>
                    </li>
                    <!-- Paginas -->
                    <?php for ($i = 1; $i < $num_paginas + 1; $i++) { ?>
                        <li><a href="../PHP/acervo_livros.php?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
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

        </div>
        <?php
        include 'mais_lidos.php';
        ?>
    </div>
</main>


<?php
include 'footer.php';
?>