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
            
           <div class="row">

             <?php
                
                include_once('../controller/conexao.php');

                $codigo = $_POST['codigo'];
                $nome = $_POST['nome'];

                $sql = "DELETE FROM cliente WHERE id = $codigo";

              if ( mysqli_query($conexao, $sql) ) {
                    mensagem ("$nome excluido(a) com sucesso!", "success");           
                } else {
                    mensagem("$nome não foi excluido(a)", "danger");
                }
             ?>

             <a href="edicao_listagem_cliente.php" class="btn btn-primary"> Voltar </a>



           </div>


       </div>

       <script src="js/bootstrap.min.js"></script>
    
    </body>


</html>