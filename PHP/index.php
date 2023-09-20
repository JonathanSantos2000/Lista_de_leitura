<?php
include '../PHP/include/header.php';
?>
<?php
include '../PHP/include/menu.php';

$_SESSION['search'] = "";
?>
<main>
  <div class="conteudo">
    <h1 class="titulo-h1">Organize sua leitura por aqui</h1>
    <br><br>
    <p class="titulo-p">&nbsp;&nbsp;&nbsp;&nbsp;Bem-vindo ao nosso site de organização de livros lidos! Aqui, criamos um espaço exclusivo para que você possa listar, organizar e compartilhar suas
      experiências literárias de forma prática e eficiente. Sabemos que os livros vão muito além de palavras impressas; eles nos levam a novos horizontes, inspiram nossas mentes e nos proporcionam
      conhecimento sem fim.
    </p>
    <br><br>
    <p class="titulo-p">
      &nbsp;&nbsp;&nbsp;&nbsp;Nosso objetivo é ajudá-lo a construir uma biblioteca virtual personalizada, onde você poderá catalogar os livros que está lendo, aqueles que já leu e ainda os que deseja
      ler. Com um sistema intuitivo, manterá registros detalhados e poderá descobrir novas recomendações com base em seus interesses e preferências literárias.
    </p>
    <br><br>
    <p class="titulo-p">
      &nbsp;&nbsp;&nbsp;&nbsp;Junte-se a nós nessa jornada literária, onde cada página virada é uma oportunidade para expandir horizontes e conectar-se com outros amantes da leitura. Seja bem-vindo
      e desfrute dessa incrível experiência literária!
    </p>

  </div>
  <?php
  include '../PHP/include/mais_lidos.php';
  ?>
</main>
<?php
include '../PHP/include/footer.php';
?>