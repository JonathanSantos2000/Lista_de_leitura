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
WHERE u.id='$idUsuario' and a.tipo='novels'";

$result = $conexao->query($sql);
?>

<?php
include 'menu.php';
?>
<main>
    <div class="conteiner">
        <?php
        include 'filtro.php';
        ?>
        <div class="conteudo">
            <?php while ($acervo_data = mysqli_fetch_assoc($result)) { ?>
                <div class='livros'>
                    <img src=" <?php echo  $acervo_data['linkImg'] ?>" alt=''>
                    <div class="conteudoLivro">
                        <div>
                            <h1><?php echo $acervo_data['nomeLivro'] ?></h1>
                        </div>
                        <div class='infLivros'>
                            <div>
                                <h4>Tipo: <?php echo $acervo_data['tipo'] ?></h4>
                                <h4>Status: <?php echo $acervo_data['statusLeitura'] ?></h4>
                                <h4>Nº de paginas lidas: <?php echo $acervo_data['pagsCaps'] ?></h4>
                                <h4>Autor: <?php echo $acervo_data['autor'] ?></h4>
                            </div>
                            <div>
                                <h4>Local de leitura:<a href="#<?php echo $acervo_data['link'] ?> ">Leia aqui</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php
        include 'mais_lidos.php';
        ?>
    </div>
</main>
<?php
include 'footer.php';
?>