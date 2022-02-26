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
$_SESSION['search'] ="";
?>

<?php
include_once('config.php');
$idUsuario = $_SESSION['idUsuario'];

//Verifica se esta sendo passado na url a pagina atual, senão é atribuido a pagina  
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

//selecionar todos os livros do acervo lidos pela pessoa
$selecionar_acervo = "SELECT * FROM usuarios u
JOIN livro l
on u.id = l.idusuarios
JOIN acervo a
on a.id = l.idacervo
JOIN marcador m
on a.id = m.idacervo
WHERE u.id='$idUsuario' and a.tipo='livros'";
$result_selecionar_acervo = $conexao->query($selecionar_acervo);

//Contar o total de livros do acervo cadastrados pela pessoa
$total_Livros = mysqli_num_rows($result_selecionar_acervo);

//Setar a quantidade de livros por pagina
$qt_livros_pg = 5;

//calcular o numero de paginas
$num_paginas = ceil($total_Livros / $qt_livros_pg);

//Calcular o inicio da visualização
$inicio = ($qt_livros_pg * $pagina) - $qt_livros_pg;

//selecionar os cursos a serem apresentados na pagina

$selecionar_livro = "SELECT * FROM usuarios u
JOIN livro l
on u.idUsuario = l.idusuarios
JOIN acervo a
on a.id = l.idacervo
JOIN marcador m
on a.id = m.idacervo
WHERE u.idUsuario='$idUsuario' and a.tipo='livros' limit $inicio, $qt_livros_pg";

$result_selecionar_livro = $conexao->query($selecionar_livro);

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
            <?php while ($acervo_data = mysqli_fetch_assoc($result_selecionar_livro)) { ?>
                <div class='livros flex-conteiner justify-self-center'>
                    <img src=" <?php echo  $acervo_data['linkImg'] ?>" alt=''>
                    <div class='conteudoLivro flex-conteiner flex-direction-column justify-self-center justify-content-space-around'>
                        <div>
                            <h1 id="tituloLivro"><?php echo $acervo_data['nomeLivro'] ?></h1>
                            <br>
                        </div>
                        <div class='infLivros flex-conteiner justify-content-space-around'>
                            <div>
                                <h4>Tipo: <?php echo $acervo_data['tipo'] ?></h4>
                                <h4>Status: <?php echo $acervo_data['statusLeitura'] ?></h4>
                                <h4>Nº paginas lidas: <?php echo $acervo_data['pagsCaps'] ?></h4>
                                <h4>Autor: <?php echo $acervo_data['autor'] ?></h4>
                                <?php if ($acervo_data['link'] != 'fisico') { ?>
                                    <h4>Local de leitura:<a href="#<?php echo $acervo_data['link'] ?>">Leia aqui</a></h4>
                                <?php } else { ?>
                                    <h4>Lido em livro físicos</h4>
                                <?php } ?>
                            </div>
                            <div>
                                <form action="update.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $acervo_data['idacervo'] ?>">
                                    <button name="submit" id="submit">
                                        atualizar cadastro
                                        <span class="icone">
                                            <ion-icon name="search-outline"></ion-icon>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div><br>
                        <h1>Marcados como:</h1>
                        <div class="marcadores flex-conteiner">
                            <div>
                                <img src="https://cdn-icons-png.flaticon.com/512/271/271205.png" alt="Já leram"><br>
                                <h3>
                                    Já leram: <?php echo $acervo_data['lido'] ?>
                                </h3>
                            </div>
                            <div>
                                <img src="https://cdn-icons-png.flaticon.com/512/159/159604.png" alt="Lendo">
                                <h3>
                                    Lendo: <?php echo $acervo_data['lendo'] ?>
                                </h3>
                            </div>
                            <div>
                                <img src="https://cdn-icons-png.flaticon.com/512/709/709631.png" alt="Querem ler">
                                <h3>
                                    Querem ler: <?php echo $acervo_data['quero_ler'] ?>
                                </h3>
                            </div>
                            <div>
                                <img src="https://cdn-icons-png.flaticon.com/512/25/25239.png" alt="Pararam">
                                <h3>
                                    Pararam:<?php echo $acervo_data['parei'] ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php
            //verificar a pagina anterior e posterior
            $pagina_anterior = $pagina - 1;
            $pagina_posterior = $pagina + 1;
            $max_links = 2;
            ?>
            <div class="flex-conteiner justify-content-rigth">
                <ul class="pagination">
                    <!-- Anterior -->
                    <li>
                        <?php
                        if ($pagina_anterior != 0) { ?>
                            <a href="../PHP/acervo_livros.php?pagina=<?php echo $pagina_anterior ?>">Anterior</a>
                        <?php } ?>
                    </li>
                    <!-- Paginas 2 antes-->
                    <?php for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
                        if ($pag_ant >= 1) { ?>
                            <li>
                                <a href="../PHP/acervo_livros.php?pagina=<?php echo $pag_ant ?>"><?php echo $pag_ant ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                    <!-- Pagina atual-->
                    <li id="pgAtual">
                        <a href="../PHP/acervo_livros.php?pagina=<?php echo $pagina ?>" style="background: aquamarine;">
                            <?php echo $pagina ?>
                        </a>
                    </li>
                    <!-- Paginas  2 depois-->
                    <?php for ($pag_dep = $pagina + 1; $pag_dep <=  $pagina + $max_links; $pag_dep++) {

                        if ($pag_dep <= $num_paginas) { ?>
                            <li>
                                <a href="../PHP/acervo_livros.php?pagina=<?php echo $pag_dep ?>"><?php echo $pag_dep ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                    <!-- Próximo -->
                    <li>
                        <?php
                        if ($pagina_posterior <= $num_paginas) { ?>
                            <a href="../PHP/acervo_livros.php?pagina=<?php echo $pagina_posterior ?>">Próximo</a>
                        <?php } ?>
                    </li>
                </ul>
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