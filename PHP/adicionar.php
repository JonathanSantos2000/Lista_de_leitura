<?php
include 'header.php';
?>

<?php
$logado = '';
$pesquisado = false;
$novo = false;
$jaExiste = false;
$idLivro = '';

include_once('config.php');
if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header('Location: login.php');
} else {
    $logado = ucfirst($_SESSION['username']);
}

$_SESSION['search'] ="";

if (isset($_POST['verificar'])) {
    $nome = $_POST['nomeLivro'];
    $autor = $_POST['nomeAutor'];

    $result_pesquisa = " SELECT * FROM acervo a
    JOIN marcador m
    on a.id = m.idacervo
    WHERE nomeLivro LIKE '%" . str_replace(' ', '%', $nome) . "%'  and autor LIKE '%" . str_replace(' ', '%', $autor) . "%'";

    $result = $conexao->query($result_pesquisa);

    if (mysqli_num_rows($result) < 1) {
        $pesquisado = false;
        $novo = true;
    } else {
        $pesquisado = true;
    }
}
if (isset($_POST['addLivro'])) {
    $pesquisado = false;
    $jaExiste = true;
    $idLivro = $_POST["id"];
    $_SESSION["idLivro"] = $_POST["id"];
}

if (isset($_POST['salvar'])) {
    $pesquisado = false;
    $jaExiste = true;
    $idLivro = $_POST["id"];
    $_SESSION["idLivro"] = $_POST["id"];
}

$sqlLivroExiste = "SELECT * FROM acervo WHERE id='$idLivro'";

$resultLivroExiste = $conexao->query($sqlLivroExiste);

while ($acervo_data = mysqli_fetch_assoc($resultLivroExiste)) {
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
        <?php
        if (!$pesquisado) { ?>
            <div class="boxAdicionar">
                <?php
                if ($novo) { ?>
                    <div class="novo">
                        <form action="validarCadAcervo.php" method="post">
                            <fieldset>
                                <legend>
                                    <h1><b>Cadastre o livro</b></h1>
                                </legend>
                                <br>
                                <div class="inputBox">
                                    <input type="text" name="nomeLivro" id="nomeLivro" class="inputUser" value="<?php echo $nome ?>" required>
                                    <label for="nomeLivro" class="labelInput">Nome</label>
                                </div>
                                <br>
                                <div class="inputBox">
                                    <input type="text" name="linkImg" id="linkImg" class="inputUser" required>
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
                                    <input type="number" name="nPaginas" id="nPaginas" class="inputUser" required>
                                    <label for="nPaginas" class="labelInput">Nº de paginas/capitulos lidos</label>
                                </div>
                                <br><br>
                                <div class="inputBox">
                                    <input type="text" name="nomeAutor" id="nomeAutor" class="inputUser" value="<?php echo $autor ?>" required>
                                    <label for="nomeAutor" class="labelInput">Nome do autor</label>
                                </div>
                                <br>
                                <br>
                                <p>Lido em:</p>
                                <div class="select">
                                    <select name="localLido" id="select">
                                        <option value="">Selecionar</option>
                                        <option value="fisico">Livro fisico</option>
                                        <option value="online">Site web</option>
                                    </select>
                                </div>
                                <br><br>
                                <div id="pai">
                                    <div id="fisico">
                                        <input type="hidden" name="id" value="fisico">
                                    </div>
                                    <br>
                                    <div id="online">
                                        <div class="inputBox">
                                            <div class="web">
                                                <input type="text" name="linkWeb" id="linkWeb" class="inputUser">
                                                <label for="linkWeb" class="labelInput">Local da leitura</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <p>Status:</p>
                                <div class="radioBox">
                                    <div class="radioBoxConteudo">
                                        <div>
                                            <input type="radio" id="lido" value="lido" name="status" placeholder="status" required>
                                            <label for="lido">Lido</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="lendo" value="lendo" name="status" placeholder="status" required>
                                            <label for="lendo">Lendo</label>
                                        </div>
                                    </div>
                                    <div class="radioBoxConteudo">
                                        <div>
                                            <input type="radio" id="quero-ler" value="quero-ler" name="status" placeholder="status" required>
                                            <label for="quero-ler">Quero-ler</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="parei" value="parei" name="status" placeholder="status" required>
                                            <label for="parei">Parei</label>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <input type="submit" name="submit" id="submit" value="Registrar">
                            </fieldset>
                        </form>
                    </div>
                <?php } else if ($jaExiste) { ?>
                    <div class="ApenasUm">
                        <form action="validarRelacionamento.php" method="post">
                            <fieldset>
                                <legend>
                                    <h1><b>Salve o livro</b></h1>
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
                                    <input type="number" name="nPaginas" id="nPaginas" class="inputUser" required>
                                    <label for="nPaginas" class="labelInput">Nº de paginas/capitulos lidos</label>
                                </div><br><br>
                                <p>Lido em:</p>
                                <div class="select">
                                    <select name="localLido" id="select">
                                        <option value="">Selecionar</option>
                                        <option value="fisico">Livro fisico</option>
                                        <option value="online">Site web</option>
                                    </select>
                                </div>
                                <br><br>
                                <div id="pai">
                                    <div id="fisico">
                                        <input type="hidden" name="id" value="fisico">
                                    </div>
                                    <br>
                                    <div id="online">
                                        <div class="inputBox">
                                            <div class="web">
                                                <input type="text" name="linkWeb" id="linkWeb" class="inputUser">
                                                <label for="linkWeb" class="labelInput">Local da leitura</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <p>Status:</p>
                                <div class="radioBox">
                                    <div class="radioBoxConteudo">
                                        <div>
                                            <input type="radio" id="lido" value="lido" name="status" placeholder="status" required>
                                            <label for="lido">Lido</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="lendo" value="lendo" name="status" placeholder="status" required>
                                            <label for="lendo">Lendo</label>
                                        </div>
                                    </div>
                                    <div class="radioBoxConteudo">
                                        <div>
                                            <input type="radio" id="quero-ler" value="quero-ler" name="status" placeholder="status" required>
                                            <label for="quero-ler">Quero-ler</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="parei" value="parei" name="status" placeholder="status" required>
                                            <label for="parei">Parei</label>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <input type="submit" name="submit" id="submit" value="Registrar">
                            </fieldset>
                        </form>
                    </div>
                <?php } else { ?>
                    <!-- Formulario pelo nome do livro e nome do Autor -->
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
                    <!-- Fim do  formulario-->
                <?php } ?>
            </div>
        <?php } else { ?>
            <div class="containerLivro">
                <div class="maisDeUmResultado">
                    <?php while ($rows_livros = mysqli_fetch_array($result)) { ?>
                        <div class="livros">
                            <img src=" <?php echo $rows_livros['linkImg']  ?>" alt="">
                            <div class="conteudoLivro">
                                <div class="ptSuperior">
                                    <div>
                                        <h1 id="tituloLivro"> <?php echo $rows_livros['nomeLivro'] ?></h1>
                                    </div>
                                    <div>
                                        <form action="adicionar.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $rows_livros['id'] ?>">
                                            <button name="addLivro">
                                                <img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" alt="">
                                            </button>
                                        </form>
                                    </div>

                                </div>
                                <div class="infLivros">
                                    <div class="lineL">
                                        <h4>Tipo: <?php echo $rows_livros['tipo'] ?></h4>
                                        <h4>Autor: <?php echo $rows_livros['autor'] ?></h4>
                                    </div>
                                </div>
                                <h1>Marcados como:</h1>
                                <div class="marcadores">
                                    <div>
                                        <img src="https://cdn-icons-png.flaticon.com/512/271/271205.png" alt="Já leram"><br>
                                        <h3>
                                            Já leram: <?php echo $rows_livros['lido'] ?>
                                        </h3>
                                    </div>
                                    <div>
                                        <img src="https://cdn-icons-png.flaticon.com/512/159/159604.png" alt="Lendo">
                                        <h3>
                                            Lendo: <?php echo $rows_livros['lendo'] ?>
                                        </h3>
                                    </div>
                                    <div>
                                        <img src="https://cdn-icons-png.flaticon.com/512/709/709631.png" alt="Querem ler">
                                        <h3>
                                            Querem ler: <?php echo $rows_livros['quero_ler'] ?>
                                        </h3>
                                    </div>
                                    <div>
                                        <img src="https://cdn-icons-png.flaticon.com/512/25/25239.png" alt="Pararam">
                                        <h3>
                                            Pararam:<?php echo $rows_livros['parei'] ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</main>
<?php
include 'footer.php';
?>