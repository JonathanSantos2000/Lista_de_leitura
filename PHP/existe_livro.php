<?php
include 'header.php';
?>

<?php
if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header('Location: login.php');
}

include_once('config.php');
$idLivro = $_SESSION["idLivro"];

$sql = "SELECT * FROM acervo WHERE id='$idLivro'";

$result = $conexao->query($sql);

while ($acervo_data = mysqli_fetch_assoc($result)) {
    $nome = $acervo_data['nomeLivro'];
    $img = $acervo_data['linkImg'];
    $tipo = $acervo_data['tipo'];
    $autor = $acervo_data['autor'];
}
?>

<?php
include 'menu.php';
?>
<main>
    <div class="conteudoBox">
        <div class="boxAdd">
            <form action="validarRelacionamento.php" method="post">
                <fieldset>
                    <legend>
                        <h1><b>Cadastre o livro</b></h1>
                    </legend>
                    <br>
                    <div class="existe">
                        <div class="LivroExiste">
                            <h3 class="contExiste">Titulo: <?php echo $nome ?></h3><br>
                            <h3 class="contExiste">Tipo: <?php echo $tipo ?></h3><br>
                            <h3 class="contExiste">Autor: <?php echo $autor ?></h3>
                        </div>
                        <div class="imgLivroExiste"><img src="<?php echo $img ?>" alt=""></div>
                    </div><br><br>
                    <div class="inputBox">
                        <input type="number" name="nPaginas" id="nPaginas" class="inputUser">
                        <label for="nPaginas" class="labelInput">Nº de paginas/capitulos lidos</label>
                    </div><br><br>
                    <div class="inputBox">
                        <input type="text" name="locaLivro" id="locaLivro" class="inputUser" required>
                        <label for="locaLivro" class="labelInput">Local da leitura</label>
                    </div>
                    <br>
                    <p>Status:</p>
                    <div class="radioBox">
                        <div class="radioBoxConteudo">
                            <div>
                                <input type="radio" id="lido" value="lido" name="status" placeholder="status">
                                <label for="lido">Lido</label>
                            </div>
                            <div>
                                <input type="radio" id="lendo" value="lendo" name="status" placeholder="status">
                                <label for="lendo">Lendo</label>
                            </div>
                        </div>
                        <div class="radioBoxConteudo">
                            <div>
                                <input type="radio" id="quero-ler" value="quero-ler" name="status" placeholder="status">
                                <label for="quero-ler">Quero-ler</label>
                            </div>
                            <div>
                                <input type="radio" id="parei" value="parei" name="status" placeholder="status">
                                <label for="parei">Parei</label>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit" value="Registrar">
                </fieldset>
            </form>
        </div>
    </div>
</main>
<?php
include 'footer.php';
?>