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
$qt_livros_pg = 5;

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
    <div class="containerLivro">
        <?php while ($acervo_data = mysqli_fetch_assoc($result_selecionar_livro)) {
            echo "<div class='livros'>";
            echo "<img src=" . $acervo_data['linkImg'] . " alt=''>";
            echo "<div class='conteudoLivro'>";
            echo "<div>";
            echo "<h1 id='tituloLivro'>" . $acervo_data['nomeLivro'] . "</h1>";
            echo "</div>";
            echo "<div class='infLivros'>";
            echo "<div class='lineL'>";
            echo "<h4>Tipo: " . $acervo_data['tipo'] . "</h4>";
            echo "<h4>Status: " . $acervo_data['statusLeitura'] . "</h4>";
            echo "<h4>Nº de paginas lidas: " . $acervo_data['pagsCaps'] . "</h4>";
            echo "<h4>Autor: " . $acervo_data['autor'] . "</h4>";
            echo "</div>";
            echo "<div class='lineR'>";
            echo "<h4>Local de leitura:<a href='#" . $acervo_data['link'] . "'>Leia aqui</a></h4>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        } ?>
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

</main>


<?php
include 'footer.php';
?>