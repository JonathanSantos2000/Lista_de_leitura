<?php
include 'header.php';
?>
<?php

include_once('config.php');

$pesquisar = $_POST['search-txt'];
$result_pesquisa = "SELECT * FROM acervo WHERE nomeLivro LIKE '%$pesquisar%'";
$resultado_pesquisa = mysqli_query($conexao, $result_pesquisa);
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
            <?php while ($rows_livros = mysqli_fetch_array($resultado_pesquisa)) {
                echo "<div class='livros'>";
                echo "<img src=" . $rows_livros['linkImg'] . " alt=''>";
                echo "<div class='conteudoLivro'>";
                echo "<div>";
                echo "<h1 id='tituloLivro'>" . $rows_livros['nomeLivro'] . "</h1>";
                echo "</div>";
                echo "<div class='infLivros'>";
                echo "<div class='lineL'>";
                echo "<h4>Tipo: " . $rows_livros['tipo'] . "</h4>";
                echo "<h4>Autor: " . $rows_livros['autor'] . "</h4>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</main>


<?php
include 'footer.php';
?>