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
    <link rel="stylesheet" href="listagemcl.css">

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

             <form class="d-flex" action="listagemcl.php" method="POST">
               <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="cliente">
               <button class="btn btn-outline-success" type="submit">Buscar</button>
             </form>
      
            </nav>   


     <table class="table  table-hover">   
        
     <thead>
         <tr>
            <th>Codigo do Administrador</th>
            <th>Nome Completo</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Número</th>        
         </tr>   

    </thead>
   
         <tbody>
                        
               <?php

                while ($linha = mysqli_fetch_assoc($dados) ) {

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
                         </tr> ";                       
                }   
             ?>
        </tbody>

     </table>


    </div>
     

 <script src="js/bootstrap.min.js"></script>
</body>
</html>