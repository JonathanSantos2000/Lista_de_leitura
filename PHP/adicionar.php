<?php
include 'header.php';
?>

<?php
$logado = '';
include_once('config.php');
if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header('Location: login.php');
} else {
    $logado = ucfirst($_SESSION['username']);
}
if (isset($_POST['verificar'])) {
    $nome = $_POST['nomeLivro'];
    $autor = $_POST['nomeAutor'];

    $sql = "SELECT * FROM acervo WHERE nomeLivro='$nome' and autor='$autor'";

    $result = $conexao->query($sql);
    if (mysqli_num_rows($result) < 1) {
    } else {
        $fetch = mysqli_fetch_object($result);
        $_SESSION["idLivro"] = $fetch->id;

        header('Location: existe_livro.php');
    }
}
?>

<?php
include 'menu.php';
?>
<main>
    <div class="conteudoBox">
        <div class="boxAdicionar">
            <div class="pesquisarLivro">
                <form action="adicionar.php" method="post">
                    <fieldset class="fieldsetVerificar">
                        <legend>
                            <h1><b>Verificar Livro</b></h1>
                        </legend>
                        <br>
                        <div class="inputBox">
                            <input type="text" name="nomeLivro" id="nomeLivro" class="inputUser" required>
                            <label for="nomeLivro" class="labelInput">Nome</label>
                        </div>
                        <br>
                        <div class="inputBox">
                            <input type="text" name="nomeAutor" id="nomeAutor" class="inputUser" required>
                            <label for="nomeAutor" class="labelInput">Nome do autor</label>
                        </div>
                        <br><br>
                        <input type="submit" name="verificar" id="submit" value="Verificar">
                    </fieldset>
                </form>
            </div>
            <div class="maisDeUmResultado">

            </div>
            <div class="novo">
                <form action="validarCadAcervo.php" method="post">
                    <fieldset>
                        <legend>
                            <h1><b>Cadastre o livro</b></h1>
                        </legend>
                        <br>
                        <div class="inputBox">
                            <input type="text" name="nomeLivro" id="nomeLivro" class="inputUser" required>
                            <label for="nomeLivro" class="labelInput">Nome</label>
                        </div>
                        <br>
                        <div class="inputBox">
                            <input type="text" name="linkImg" id="linkImg" class="inputUser">
                            <label for="linkImg" class="labelInput">link da imagem</label>
                        </div>
                        <br>
                        <p>Tipo:</p>
                        <div class="radioBox">
                            <div class="radioBoxConteudo">
                                <div>
                                    <input type="radio" id="livro" value="livros" name="tipo" placeholder="Tipo" required>
                                    <label for="livro">Livro</label>
                                </div>
                                <div>
                                    <input type="radio" id="manga" value="manga" name="tipo" placeholder="Tipo" required>
                                    <label for="manga">Manga</label>
                                </div>
                                <div>
                                    <input type="radio" id="novels" value="novels" name="tipo" placeholder="Tipo" required>
                                    <label for="novels">Novels</label>
                                </div>
                            </div>
                            <div class="radioBoxConteudo">
                                <div>
                                    <input type="radio" id="manhwa" value="manhwa" name="tipo" placeholder="Tipo" required>
                                    <label for="manhwa">Manhwa</label>
                                </div>
                                <div>
                                    <input type="radio" id="manhua" value="manhua" name="tipo" placeholder="Tipo" required>
                                    <label for="manhua">Manhua</label>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="inputBox">
                            <input type="number" name="nPaginas" id="nPaginas" class="inputUser">
                            <label for="nPaginas" class="labelInput">Nº de paginas/capitulos lidos</label>
                        </div>
                        <br>
                        <div class="inputBox">
                            <input type="text" name="nomeAutor" id="nomeAutor" class="inputUser" required>
                            <label for="nomeAutor" class="labelInput">Nome do autor</label>
                        </div>
                        <br>
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
            <div class="ApenasUm">
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
    </div>
</main>
<?php
include 'footer.php';
?>