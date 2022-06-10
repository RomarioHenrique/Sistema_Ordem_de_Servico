<?php

    include_once('../controller/conexao.php');

    if ( isset($_POST['submit']) ) {
        
        $NomeCompleto = $_POST['Nome_Completo'];
        $Data = $_POST['Data'];
        $DatadeNascimento = $_POST['Data_de_Nacismento'];
        $CPF = $_POST['CPF'];
        $RG = $_POST['RG'];
        $Estado = $_POST['Estado'];
        $Cidade = $_POST['Cidade'];
        $Numero = $_POST['Numero'];
    
        $sql = "INSERT INTO cliente 
                    (NomeCompleto, DataAtual, DataNascimento, CPF , RG , Estado, Cidade, Numero )
                VALUES 
                    ( '$NomeCompleto', '$Data', '$DatadeNascimento', '$CPF', '$RG', '$Estado', '$Cidade', '$Numero')";

        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            mensagem("Cadastrado com sucesso!", "success");
        } else {
            mensagem("não foi possível cadastrar o cliente $NomeCompleto", 'danger');
        }

    }

?>






<!DOCTYPE html>

<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">

 <meta name="viewport" 
 content="width=device-width, initial-scale=1.0">
 
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

  <link rel="stylesheet" href="css/styles/cadCliente.css" type="text/css">     
  
        <title>Cadastro de Produto</title>

        <style>

          body{
            background-image: url("images/cadastros/fundo2.jpg");
          }

        </style>
    
    </head>

    <body>
     
        <div class="container" >
          <h1 class="text-center">CADASTRO DE CLIENTE</h1>

      <form action="CadastroCliente.php" method="POST">

        <div class="row">
          <div class="col">
            <label>Nome Completo</label>
            <input type="text" class="form-control" placeholder="Informe o nome completo" name="Nome_Completo">
          </div>
            
        </div>
          

            <div class="row">
                
                <div class="col">
                    <label>Data</label>
                    <input type="date" class="form-control" name="Data">
                </div>
              </div>

              <div class="row">
                <div class="col">
            <label>Data de Nacismento</label>
           <input type="date" class="form-control" name="Data_de_Nacismento">
          </div>
        </div>

           

              <div class="row">
                 <div class="col">
                   <label>CPF</label>
                   <input type="number" class="form-control" name="CPF">
                 </div>
                </div>

                <div class="row">
                 <div class="col">
                   <label>RG</label>
                   <input type="number" class="form-control" name="RG">
                 </div>
                </div>
              
              <div class="row">
                 <div class="col">
                   <label>Estado</label>
                   <input type="text" class="form-control" name="Estado">
                 </div>
                </div>

              <div class="row">
                 <div class="col">
                   <label>Cidade</label>
                   <input type="text" class="form-control" name="Cidade">
                 </div>
                </div>

              <div class="row">
                    <div class="col">
                   <label>Numero</label>
                   <input type="number" class="form-control" name="Numero">
                 </div>
                 
                   </div>
              
             <div class="row" >
                <div class="col" >                  
                    <a href="#" src="">
                      <input type="submit" name="submit" class="btn btn-dark" value="Cadastrar" >
                    </a>
                </div>
        </div>
     </div>
          </form>

    </div>
        <script src="js/bootstrap.min.js" ></script>

        <script> 

const mensagem = document.querySelector('.mensagem');
        
if (mensagem) {
    
    setTimeout( function(){ 
        mensagem.classList.add('ocultar');
    }, 3000);

}

        </script> 

    </body>

</html>