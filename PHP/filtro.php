<div class="filtro">
    <fieldset id="fieldsetFiltro">
        <legend id="legendFiltro">
            <h1 id="titulo"><b>filtro</b></h1>
        </legend>
        <form action="resultadoFiltro.php" method="post">
            <?php $pesquisa = $_SESSION['search'];
            if ($pesquisa != "") {
                echo "Palavra pesquisada = " . $pesquisa . "<br>";
            }

            ?>
            <p>Tipo:</p>
            <div class="radioBoxFiltro">
                <div id="radioFiltro">
                    <input type="checkbox" id="livro" value="livros" name="tipo[]">
                    <label for="livro">Livros</label>
                </div>
                <div id="radioFiltro">
                    <input type="checkbox" id="manga" value="manga" name="tipo[]">
                    <label for="manga">Manga</label>
                </div>
                <div id="radioFiltro">
                    <input type="checkbox" id="novels" value="novels" name="tipo[]">
                    <label for="novels">Novels</label>
                </div>
                <div id="radioFiltro">
                    <input type="checkbox" id="manhwa" value="manhwa" name="tipo[]">
                    <label for="manhwa">Manhwa</label>
                </div>
                <div id="radioFiltro">
                    <input type="checkbox" id="manhua" value="manhua" name="tipo[]">
                    <label for="manhua">Manhua</label>
                </div>
            </div>
            <p>Status:</p>
            <div class="radioBoxFiltro flex-conteiner flex-direction-column">
                <div id="radioFiltro">
                    <input type="radio" id="lido" value="lido" name="status" placeholder="status">
                    <label for="lido">Lidos</label>
                </div>
                <div id="radioFiltro">
                    <input type="radio" id="lendo" value="lendo" name="status" placeholder="status">
                    <label for="lendo">Lendo</label>
                </div>
                <div id="radioFiltro">
                    <input type="radio" id="quero-ler" value="quero-ler" name="status" placeholder="status">
                    <label for="quero-ler">Quero-ler</label>
                </div>
                <div id="radioFiltro">
                    <input type="radio" id="parei" value="parei" name="status" placeholder="status">
                    <label for="parei">Parei</label>
                </div>
            </div>
            <p>Lido:</p>
            <div class="radioBoxFiltro">
                <div id="radioFiltro">
                    <input type="radio" id="fisico" value="fisico" name="local" placeholder="local">
                    <label for="lido">Livro fisico</label>
                </div>
                <div id="radioFiltro">
                    <input type="radio" id="online" value="online" name="local" placeholder="local">
                    <label for="lendo">online</label>
                </div>
            </div>
            <input type="submit" name="submit" id="submitFiltro" value="Filtrar">
        </form>
    </fieldset>
</div>