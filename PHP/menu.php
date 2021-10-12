<?php
$logado = '';
if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
  unset($_SESSION['username']);
  unset($_SESSION['password']);
} else {
  $logado = ucfirst($_SESSION['username']);
}

?>
<header>
  <nav class="menu">
    <ul class="menu-list">
      <li><a href="../PHP/index.php">Home</a></li>
      <?php

      if ($logado == null) {
        print_r('<div class="cadLog">');
        print_r('<li><a href="../PHP/registro.php">Cadastra-se</a></li>');
        print_r('<li><a href="../PHP/login.php">Login</a></li>');
        print_r('</div>');
      } else {
        print_r('<li><a href="../PHP/adicionar.php">Adicionar</a></li>');
        print_r('<li>');
        print_r('<a href="#">Acervo</a>');
        print_r('<ul>');
        print_r('<li"><a href="../PHP/acervo_livros.php">Livros</a></li>');
        print_r('<li"><a href="../PHP/acervo_novel.php">Novels</a></li>');
        print_r('<li"><a href="../PHP/acervo_Manga_Manhwa_Manhua.php">Manga, Manhwa, Manhua</a></li>');
        print_r('</ul>');
        print_r('</li>');
        print_r('<li class="usuario">');
        echo "<a href='#'>$logado</a>";
        print_r('<ul>');
        print_r('<li><a href="../PHP/sair.php">Sair</a></li>');
        print_r('</ul>');
        print_r('</li>');
      }
      ?>


    </ul>
  </nav>
</header>