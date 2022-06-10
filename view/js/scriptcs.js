//Botão para ocultat e exibir a senha.

function ExibirS() {
    var temp = document.getElementById("senhaocl");
    if (temp.type === "password") {
      temp.type = "text";
    } else {
      temp.type = "password";
    }
  }
  