console.log("reaload");
var listaFilmes = [
  "https://br.web.img3.acsta.net/pictures/21/04/14/19/06/3385237.jpg",
  "https://upload.wikimedia.org/wikipedia/pt/b/be/Aladdin_%282019%29.jpg"
];
var nomeFilmes = ["velozes e furiosos 9", "Aladdin"];
var mensagemErro = document.getElementById("menErro");

function adicionarFilme() {
  var nomeFilme = document.getElementById("nomeFilme").value;
  if (nomeFilme != "") {
    var filmeFavorito = document.getElementById("filme").value;
    var canAdd = true;
    if (filmeFavorito.endsWith(".jpg")) {
      for (var i = 0; i < listaFilmes.length; i++) {
        if (filmeFavorito == listaFilmes[i]) {
          mensagemErro.innerHTML = "Esse filme já foi add";
          canAdd = false;
        }
      }
      if (canAdd) {
        addFilme(filmeFavorito, nomeFilme);
      }
    } else {
      mensagemErro.innerHTML = "Endereço de filme invalido";
    }
    document.getElementById("filme").value = "";
  } else {
    mensagemErro.innerHTML = "Digite o nome do filme";
  }
}

// metodo adicionar filme
function addFilme(filme, nome) {
  listaFilmes.push(filme);
  nomeFilmes.push(nome);
  mostrarFilmeFavorito();
}

//metodo mostrar lista
function mostrarFilmeFavorito() {
  var elementoResultado = document.getElementById("listaFilmes");
  elementoResultado.innerHTML = "";
  for (var i = 0; i < listaFilmes.length; i++) {
    elementoResultado.innerHTML +=
      "<tr><th><img src=" +
      listaFilmes[i] +
      "></th></tr><tr><td><figcaption>" +
      nomeFilmes[i] +
      "</figcaption></td></tr>" +
      "<tr><td>" +
      "<button onClick='excluirFilme(" +
      i +
      ")'>Excluir</button>" +
      "</td></tr>";
  }
}

function excluirFilme(posicao) {
  nomeFilmes.splice(posicao, 1);
  listaFilmes.splice(posicao, 1);
  mostrarFilmeFavorito();
}