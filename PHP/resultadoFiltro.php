<?php
include 'header.php';
?>
<?php
include_once('config.php');
$tipo = null;
$filtroTipo = null;
if (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
}
if ($tipo !== null) {
    for ($i = 0; $i < count($tipo); $i++) {
        if (count($tipo) > 1 && $i > 0) {
            $filtroTipo .= 'OR tipo="' . $tipo[$i] . '" ';
        } else {
            $filtroTipo .= 'tipo="' . $tipo[$i] . '" ';
        }
    }
    echo "<p>$filtroTipo</p>";
}

$sql = "SELECT * FROM acervo WHERE $filtroTipo";

$resultSql = $conexao->query($sql);

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
                <?php while ($acervo_data = mysqli_fetch_assoc($resultSql)) { ?>
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
                                        <button name="submit" id="salvar">
                                            SALVAR NA SUA LISTA
                                            <span class="icone">
                                                <ion-icon name="search-outline"></ion-icon>
                                            </span>
                                        </button>
                                    </form>
                                <?php } else { ?>
                                    <form action="update.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $acervo_data['id'] ?>">
                                        <button name="submit" id="submit">
                                            atualizar cadastro
                                            <span class="icone">
                                                <ion-icon name="search-outline"></ion-icon>
                                            </span>
                                        </button>
                                    </form>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                <?php } ?>
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