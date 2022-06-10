$(document).ready(function () {
  $(".click").click(function () {
    $(".popup_box").css("display", "block");
  });

  $(".btn1").click(function () {
    $(".popup_box").css("display", "none");
  });

  $(".btn2").click(function () {
    const tes = document.getElementById("equip");

    if (!tes.checkValidity()) {
      Swal.fire("FALTA DADOS");
      $(".popup_box").css("display", "none");
    } else {
      Swal.fire("TUDO OK");
      $(".popup_box").css("display", "none");
    }
  });
});

const mensagem = document.querySelector('.mensagem');
        
if (mensagem) {
    
    setTimeout( function(){ 
        mensagem.classList.add('ocultar');
    }, 3000);

}
