<?php
include 'header.php';
?>
<?php
$msg = '';
if (isset($_POST['submit'])) {
    $selecionado = $_POST['localLido'];
    if ($selecionado == "fisico") {
        $msg = "livro lido em livro fisico";
    } elseif ($selecionado == "online") {
        $msg = "livro lido em site web";
        if ($_POST["linkWeb"] != "") {
            $link = $_POST["linkWeb"];
            $msg .= "<br>" . $link;
        } else {
            $msg .= "<br> Por favor coloque o link da pagina ";
        }
    } else {
        $msg = "Por favor selecione uma opção";
    }
    $msg .= "<br><br>";
}

?>
<?php
include 'menu.php';
?>
<main>
    <div class="conteudoBox">
        <div class="boxAdicionar">
            <div class="novo">
                <form action="update.php" method="post">
                    <fieldset>
                        <legend>
                            <h1><b>Cadastre o livro</b></h1>
                        </legend>
                        <br>
                        <?php echo $msg ?>
                        <p>Lido em:</p>
                        <select name="localLido" id="select">
                            <option value="">Selecionar</option>
                            <option value="fisico">Livro fisico</option>
                            <option value="online">Site web</option>
                        </select>

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