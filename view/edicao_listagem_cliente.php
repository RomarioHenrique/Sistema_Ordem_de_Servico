<?php 


if (isset( $_POST['cliente'] ) ) {

    $cliente = $_POST['cliente'];

} else {

   $cliente = '';

}

include_once('../controller/conexao.php');

$sql = "SELECT *  FROM cliente WHERE NomeCompleto LIKE '%$cliente%' ";

 $dados = mysqli_query($conexao, $sql);



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Cliente</title>
    <link rel="stylesheet" href="css/styles/listagemcl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
   

       <!--capturar uma informação que foi submetida
       por um formulário utilizando o método POST.
       dentro dos colchetes deve ser colocado o nome
       do name do campo que eu quero pegar o valor.-->
   

    

    <div class="container">

        <div class="titulo">
        <h1>LISTAGEM DE CLIENTES</h1>
         </div>

       
        <nav class="navbar navbar-light bg-light">
          
          <div class="container-fluid">

             <form class="d-flex" action="edicao_listagem_cliente.php" method="POST">
               <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="cliente">
               <button class="btn btn-outline-success" type="submit">Buscar</button>
             </form>
      
            </nav>   


     <table class="table  table-hover">   
        
     <thead>
         <tr>
            <th>Nome Completo</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Numero</th>    
            <th>Ações</th> 
           
         </tr>   

    </thead>
   
         <tbody>
                        
               <?php

                while ($linha = mysqli_fetch_assoc($dados) ) {
                $codigo = $linha['ID'];
                $NomeCompleto = $linha['NomeCompleto'];  
                $DatadeNascimento = $linha['DataNascimento'];
                $CPF = $linha['CPF'];
                $RG = $linha['RG']; 
                $Estado = $linha['Estado']; 
                $Cidade = $linha['Cidade'];
                $Numero = $linha['Numero'];     

                   echo "<tr>
                             <td> $NomeCompleto </td>
                             <td> $DatadeNascimento </td>
                             <td> $CPF </td>
                             <td> $RG </td>
                             <td> $Estado </td> 
                             <td> $Cidade </td>
                             <td> $Numero </td>
                             <td>
                             <a> <i class='bi bi-pencil-fill'></i> </a>
                             <a href='#' data-bs-toggle='modal' data-bs-target='#exampleModal' 
                                onclick=" . '"' . "obterDados($codigo, '$NomeCompleto')" . '"' . "> <i class='bi bi-trash-fill'></i> </a>
									           </td>
                         </tr> ";                       
                }   
             ?>
        </tbody>

     </table>


    </div>
     
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmção de exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="excluir_cliente.php">

      <div class="modal-body">

      <p>Deseja realmente excluir <strong id ="nome_pessoa"> </strong>?</p>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <input type="hidden" name="codigo" id="codigo_pessoa" value="">
        <input type="hidden" name="nome" id="nome_pessoa_post" value="">
        <input type="submit" class="btn btn-danger" value="Excluir">
      </div>
     </form>
    </div>
  </div>
</div>
 
<script src="js/bootstrap.min.js"></script>

  <script> 

      function obterDados(codigo,nome) {
         document.getElementById('codigo_pessoa').value = codigo; 
          document.getElementById('nome_pessoa').innerHTML = nome;  
          document.getElementById('nome_pessoa_post').value = nome; 
      }

  </script>

</body>
</html>