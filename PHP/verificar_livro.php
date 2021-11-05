<?php
include 'header.php';
?>
<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

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
        <div class="box">
            <form class="formVeri" action="verificar_livro.php" method="post">
                <fieldset class="fieldsetVerificar">
                    <legend>
                        <h1 id="titulo"><b>Verificar Livro</b></h1>
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
                    <input type="submit" name="submit" id="submit" value="Verificar">
                </fieldset>
            </form>
        </div>
    </div>
</main>
<?php
include 'footer.php';
?>