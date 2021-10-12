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

<div class="container">
    <?php
    include 'menu.php';
    ?>
    <main>
        <div class="conteudoBox">
            <div class="boxAdd">
                <form action="validarCadAcervo.php" method="post">
                    <fieldset>
                        <legend><b>
                                <h1>Cadastre o livro</h1>
                            </b></legend>
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
        </div>
    </main>
    <?php
    include 'footer.php';
    ?>