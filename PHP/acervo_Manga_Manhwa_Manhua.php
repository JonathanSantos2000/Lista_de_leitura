<?php
include 'header.php';
?>
<?php
include_once('config.php');

$logado = '';
$idUsuario = $_SESSION['idUsuario'];
if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
} else {
    $logado = ucfirst($_SESSION['username']);
}

$sql = "SELECT * FROM usuarios u
JOIN livro l
on u.id = l.idusuarios
JOIN acervo a
on a.id = l.idacervo
WHERE u.id ='$idUsuario' and a.tipo = 'manhwa' OR 
      u.id ='$idUsuario' and a.tipo = 'manhua' OR
      u.id ='$idUsuario' and a.tipo = 'manga'";

$result = $conexao->query($sql);
?>

<?php
include 'menu.php';
?>
<main>
    <div class="conteudo">
        <?php while ($acervo_data = mysqli_fetch_assoc($result)) {
            echo "<div class='livros'>";
            echo "<img src=" . $acervo_data['linkImg'] . " alt=''>";
            echo "<div class='conteudoLivro'>";
            echo "<div>";
            echo "<h1>" . $acervo_data['nomeLivro'] . "</h1>";
            echo "</div>";
            echo "<div class='infLivros'>";
            echo "<div>";
            echo "<h4>Tipo: " . $acervo_data['tipo'] . "</h4>";
            echo "<h4>Status: " . $acervo_data['statusLeitura'] . "</h4>";
            echo "<h4>Nº de capitulos lidos: " . $acervo_data['pagsCaps'] . "</h4>";
            echo "<h4>Autor: " . $acervo_data['autor'] . "</h4>";
            echo "</div>";
            echo "<div>";
            echo "<h4>Local de leitura:<a href='#" . $acervo_data['link'] . "'>Leia aqui</a></h4>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        } ?>
    </div>
</main>
<?php
include 'footer.php';
?>