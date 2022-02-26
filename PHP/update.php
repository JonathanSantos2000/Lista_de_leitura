<?php
include 'header.php';
?>
<?php
include_once('config.php');
$msg = '';
$idLivro = $_POST["id"];

$_SESSION["idLivro"] = $_POST["id"];
$idUsuario = $_SESSION["idUsuario"];

//selecionar o livro de update da pessoa
$sqlLivroExiste = "SELECT * FROM usuarios u
JOIN livro l
on u.idUsuario = l.idusuarios
JOIN acervo a
on a.id = l.idacervo
JOIN marcador m
on a.id = m.idacervo
WHERE u.idUsuario='$idUsuario' and a.id='$idLivro'";

$resultLivroExiste = $conexao->query($sqlLivroExiste);

while ($acervo_data = mysqli_fetch_assoc($resultLivroExiste)) {
    $idLivro = $acervo_data['idacervo'];
    $idUsuario = $acervo_data['idUsuario'];
    echo $idUsu;
    $nome = $acervo_data['nome'];
    $nomeLivro = $acervo_data['nomeLivro'];
    $img = $acervo_data['linkImg'];
    $tipo = $acervo_data['tipo'];
    $autor = $acervo_data['autor'];
    $link = $acervo_data['link'];
    $statusLeitura = $acervo_data['statusLeitura'];
    $statusAnterior = $statusLeitura;
    $pagsCaps = $acervo_data['pagsCaps'];
    $idMarcador = $acervo_data['idMarcador'];

    $lido = $acervo_data['lido'];
    $lendo = $acervo_data['lendo'];
    $queroLer = $acervo_data['quero_ler'];
    $parei = $acervo_data['parei'];
}

/* depois de clicar em */
if (isset($_POST['submit-update'])) {
    $idLivro = $_POST['idacervo'];
    $idUsuario = $_POST['idUsuario'];

    echo "opa 1 " . $idUsuario . "<br>";
    echo "opa 2 " . $idLivro;

    $link = $_POST['linkWeb'];
    $statusLeitura = $_POST["status"];
    $statusAnterior = $_POST['statusAnterior'];
    $tipo = $_POST['tipo'];
    $pagsCaps = $_POST['nPaginas'];

    $idMarcador = $_POST['idMarcador'];

    $lido = $_POST['lido'];
    $lendo = $_POST['lendo'];
    $queroLer = $_POST['queroLer'];
    $parei = $_POST['parei'];


    /*   $sqlUpdate = "UPDATE livro
    SET link = '$link', statusLeitura = '$statusLeitura', pagsCaps = '$pagsCaps'
    WHERE idusuarios='$idUsuario' and idacervo='$idLivro'";

    $result = $conexao->query($sqlUpdate); */

    /* marcador */


    /* echo "lido " . $lido . "<br>lendo " . $lendo . "<br>quero_ler " . $queroLer . "<br>parei    " . $parei . "<br>"; */
    /* removendo status anterior */
    switch ($statusAnterior) {
        case 'lido':
            $lido--;
            break;
        case 'lendo':
            $lendo--;
            break;
        case 'queroLer':
            $queroLer--;
            break;
        case 'parei':
            $parei--;
            break;
    }

    /*  echo "<br>lido " . $lido . "<br>lendo " . $lendo . "<br>quero_ler " . $queroLer . "<br>parei    " . $parei . "<br>"; */
    /* Add status Novo */
    switch ($statusLeitura) {
        case 'lido':
            $lido++;
            break;
        case 'lendo':
            $lendo++;
            break;
        case 'queroLer':
            $queroLer++;
            break;
        case 'parei':
            $parei++;
            break;
    }

    /* echo "<br>lido " . $lido . "<br>lendo " . $lendo . "<br>quero_ler " . $queroLer . "<br>parei " . $parei; */


    /*     $sqlUpdate = "UPDATE marcador
    SET lido = '$lido', lendo = '$lendo',quero_ler = '$queroLer', parei = '$parei'
    WHERE idMarcador='$idMarcador'";

    $result = $conexao->query($sqlUpdate); */

    /* redirecionar para alguma pagina */

    /*     if ($tipo == "livros") {
        header('Location: acervo_livros.php');
    } else if ($tipo == "manhwa" || $tipo == "manhua" || $tipo == "manga") {
        header('Location: acervo_Manga_Manhwa_Manhua.php');
    } else if ($tipo == "novels") {
        header('Location: acervo_novel.php');
    } */
}
?>
<?php
include 'menu.php';
?>
<main>
    <div class="conteudoBox">
        <div class="boxAdicionar">
            <form action="update.php" method="post">
                <fieldset>
                    <legend>
                        <h1><b>Atualizar as informações <br>do livro</b></h1>
                    </legend>
                    <br>
                    <div class="existe">
                        <div class="LivroExiste">
                            <h3 class="contExiste">Titulo: <?php echo $nomeLivro ?></h3><br>
                            <h3 class="contExiste">Tipo: <?php echo $tipo ?></h3><br>
                            <h3 class="contExiste">Autor: <?php echo $autor ?></h3>
                        </div>
                        <div class="imgLivroExiste"><img src="<?php echo $img ?>" alt=""></div>
                    </div><br><br>
                    <div class="inputBox">

                        <input type="number" name="nPaginas" id="nPaginas" class="inputUser" value="<?php echo $pagsCaps ?>">
                        <label for=" nPaginas" class="labelInput"">Nº de paginas/capitulos lidos</label>
                    </div><br><br>
                    <p>Lido em:</p>
                    <div class=" select">
                            <select name="localLido" id="select">
                                <option value="">Selecionar</option>
                                <option value="fisico" <?php if ($link == "fisico") { ?>selected<?php } ?>>Livro fisico</option>
                                <option value="online" <?php if ($link != "fisico") { ?>selected<?php } ?>>Site web</option>
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
                                    <input type="text" name="linkWeb" id="linkWeb" class="inputUser" value="<?php echo $link ?>">
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
                                <input type="radio" id="lido" value="lido" name="status" placeholder="status" <?php if ($statusLeitura == "lido") { ?>checked<?php } ?>>
                                <label for="lido">Lido</label>
                            </div>
                            <div>
                                <input type="radio" id="lendo" value="lendo" name="status" placeholder="status" <?php if ($statusLeitura == "lendo") { ?>checked<?php } ?>>
                                <label for="lendo">Lendo</label>
                            </div>
                        </div>
                        <div class="radioBoxConteudo">
                            <div>
                                <input type="radio" id="quero-ler" value="quero-ler" name="status" placeholder="status" <?php if ($statusLeitura == "quero-ler") { ?>checked<?php } ?>>
                                <label for="quero-ler">Quero-ler</label>
                            </div>
                            <div>
                                <input type="radio" id="parei" value="parei" name="status" placeholder="status" <?php if ($statusLeitura == "parei") { ?>checked<?php } ?>>
                                <label for="parei">Parei</label>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <input type="hidden" name="idLivro" value="<?php echo $idLivro ?>">
                    <input type="hidden" name="idUsuario" value="<?php echo $idUsuario ?>">
                    <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                    <input type="hidden" name="statusAnterior" value="<?php echo $statusAnterior ?>">
                    <input type="hidden" name="idMarcador" value="<?php echo $idMarcador ?>">
                    <input type="hidden" name="lido" value="<?php echo $lido ?>">
                    <input type="hidden" name="lendo" value="<?php echo $lendo ?>">
                    <input type="hidden" name="queroLer" value="<?php echo $queroLer ?>">
                    <input type="hidden" name="parei" value="<?php echo $parei ?>">

                    <input type="submit" name="submit-update" id="submit" value="Atualizar">
                </fieldset>
            </form>
        </div>
    </div>
</main>
<?php
include 'footer.php';
?>