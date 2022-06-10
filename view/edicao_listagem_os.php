<?php 



if (isset( $_POST['nome'] ) ) {

    $nome = $_POST['nome'];

} else {

   $nome = '';

}

include_once('../controller/conexao.php');

$sql = "SELECT *  FROM ordem_de_servico WHERE cliente LIKE '%$nome%' ";

$dados = mysqli_query($conexao, $sql);


?>



<!DOCTYPE html> 

<html lang="pt-BR">

  <head>

     <meta charset="UTF-8" />

     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Listagem de Usuários</title>

     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

     <link rel="stylesheet" href="css/styles/listagemos.css" />

  </head>


  <body>



    <div class="container">


      <div class="titulo">
        <h1 class="text-center">ORDEM DE SERVIÇO</h1>
      </div>

      <nav class="navbar navbar-light bg-light">

        <form class="d-flex" action="edicao_listagem_os.php" method="POST">

          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" name="nome">
          <button class="btn btn-outline-success my-2 my-sm-0" id="btns" type="submit">Pesquisar</button>

        </form>

      </nav>


      <table class="table">
        <thead id="titcols">
          <tr>
            <th>Número da OS</th>
            <th>Cliente</th>
            <th>Contato</th>
            <th>Equipamento</th>
            <th>Data de Entrada</th>
            <th>Status</th>
            <th>Ações</th>
          </tr>
        </thead>

        <tbody>

         <?php

          while ($linha = mysqli_fetch_assoc($dados) ) {
              
              $numeroOs = $linha['id'];
              $cliente = $linha['Cliente'];
              $contato = $linha['Contato'];
              $equipamento = $linha['Equipamento'];
              $dataEntrada = $linha['DataEntrada'];
              $status = $linha['StatusOS'];


              echo "<tr>

               <td> $numeroOs </td>
               <td> $cliente </td>
               <td> $contato </td>
               <td> $equipamento </td>
               <td> $dataEntrada </td>
               <td> $status </td>
               <td>
                  <a> <i class='bi bi-pencil-fill'></i> </a>
                  <a href='#' data-bs-toggle='modal' data-bs-target='#exampleModal' 
                     onclick=" . '"' . "obterDados($numeroOs)" . '"' . "> <i class='bi bi-trash-fill'></i> </a>
               </td>

              </tr>";


          }

         ?>
   
        </tbody>

        
      </table>

        </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

         <div class="modal-dialog">

            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Exclusão da Ordem. </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

           <form action="excluir_os.php" method="POST">

              <div class="modal-body">
                <p> Deseja realmente excluir esta Ordem de Serviço? </p>
              </div>

             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cancelar </button>
                <input type="hidden" name="codigo" id="codigo_ordem">
                <input type="submit" class="btn btn-primary" value="Excluir"> </input>
             </div>

           </form>

        </div>

      </div>

    </div>

    <script src="js/bootstrap.min.js"></script>

    <script>

       function obterDados(codigo) {
            document.getElementById('codigo_ordem').value = codigo;
        }


    </script>

  </body>

</html>
