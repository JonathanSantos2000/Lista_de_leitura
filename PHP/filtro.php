<div class="filtro">
    <fieldset id="fieldsetFiltro">
        <legend id="legendFiltro">
            <h1 id="titulo"><b>filtro</b></h1>
        </legend>
        <form action="" method="post">
            <p>Tipo:</p>
            <div class="radioBoxFiltro">
                <div id="radioFiltro">
                    <input type="radio" id="livro" value="livros" name="tipo" placeholder="Tipo" required>
                    <label for="livro">Livro</label>
                </div>
                <div id="radioFiltro">
                    <input type="radio" id="manga" value="manga" name="tipo" placeholder="Tipo" required>
                    <label for="manga">Manga</label>
                </div>
                <div id="radioFiltro">
                    <input type="radio" id="novels" value="novels" name="tipo" placeholder="Tipo" required>
                    <label for="novels">Novels</label>
                </div>
                <div id="radioFiltro">
                    <input type="radio" id="manhwa" value="manhwa" name="tipo" placeholder="Tipo" required>
                    <label for="manhwa">Manhwa</label>
                </div>
                <div id="radioFiltro">
                    <input type="radio" id="manhua" value="manhua" name="tipo" placeholder="Tipo" required>
                    <label for="manhua">Manhua</label>
                </div>
            </div>
            <p>Status:</p>
            <div class="radioBoxFiltro">
                <div id="radioFiltro">
                    <input type="radio" id="lido" value="lido" name="status" placeholder="status">
                    <label for="lido">Lido</label>
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