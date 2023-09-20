<?php
include_once('config.php');
/*                                    <a href="../PHP/livro.php?id=<?php echo $acervo_data['id_acervo'] ?>">
                                        <?php echo $acervo_data['nm_titulo'] ?>
                                    </a> */
$marcados = "SELECT M.id_acervo,A.url_img,A.nm_titulo, (SUM(M.qt_leu) + SUM(M.qt_lendo) + SUM(M.qt_Querem_ler) + SUM(M.qt_Parou)) as total_marcado FROM marcador M
INNER JOIN acervo A
ON M.id_acervo = A.id_acervo
GROUP BY M.id_acervo 
ORDER BY total_marcado 
DESC LIMIT 3";

$result_marcados = $conexao->query($marcados);
?>
<div class="Works">
  <fieldset class="container">
    <legend id="legendLivro">
      <h1 id="titulo"><b>Mais Marcados</b></h1>
    </legend>
    <div class="boxML">
      <?php while ($acervo_data = mysqli_fetch_assoc($result_marcados)) { ?>
        <div class="card">
          <div class="imagem">
            <img class="imgLivroFav" src="<?php echo  $acervo_data['url_img'] ?>" alt="<?php echo $acervo_data['nm_titulo'] ?>">
          </div>
          <div class="texto">
            <div class="pra">
              <h5>
                <a href="../PHP/livro.php?id=<?php echo $acervo_data['id_acervo'] ?>">
                  <?php echo $acervo_data['nm_titulo'] ?>
                </a>
              </h5>
            </div>
          </div>
        </div>
      <?php } ?>
  </fieldset>
</div>