<?php 

include_once('../controller/conexao.php');


 if ( isset($_POST['submit']) ) {
        $NumeroOs = $_POST['numeroOs'];
        $DataDeEntrada = $_POST['dataE'];
        $PrevisaoDeSaida = $_POST['dataS'];
        $Cliente = $_POST['cliente'];
        $ContatodeCliente = $_POST['contato'];
        $Enderecodocliente = $_POST['endereco'];
        $Equipamento = $_POST['equipamentos'];
        $Marca = $_POST['marca'];
        $Modelos = $_POST['modelo'];
        $Nserie = $_POST['numeroSerie'];
        $Acessorios = $_POST['acessorios'];
        $Defeito = $_POST['defeito'];
        $Observacoes = $_POST['observacoes'];
        
    
        $sql = "INSERT INTO ordem_de_servico 
                    (NumeroOS, DataEntrada, PrevisaoSaida, Cliente, Contato, Endereco, Equipamento,
                     Marca, Modelo, NumeroSerie, Acessorios, Defeito, Observacoes)

                VALUES 

                    ( '$NumeroOs', '$DataDeEntrada', '$PrevisaoDeSaida', '$Cliente', '$ContatodeCliente', '$Enderecodocliente',
                    '$Equipamento', '$Marca', '$Modelos', '$Nserie', '$Acessorios', '$Defeito','$Observacoes')";

        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            mensagem("Ordem de Serviço cadastrado com sucesso!", "success");
        } else {
            mensagem("não foi possível cadastrar o produto $nome", 'danger');
        }


    }

?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro Ordem de Serviço</title>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

   
    <link rel="stylesheet" href="css/styles/cadOs.css" type="text/css" />
    
  </head>
  
  <body>
    
    <div class="container-fluid" id="divprinc">
      
      <div class="tituloOS"><h1>CADASTRO ORDEM DE SERVIÇO (OS)</h1></div>
      
       <form action="CadastroOS.php" method="POST">
        
         <div class="container-fluid" id="divprinc1">
          
           <div class="row">

            <div class="col">
              <label> Data de Entrada* </label>
              <input type="date" class="form-control" name="dataE" required />
            </div>

            <div class="col">
              <label> Previsão de Saida* </label>
              <input type="date" class="form-control" name="dataS" required/>
            </div>
            
          </div>

          <div class="row" id="linha1">
            
            <div class="col">
              <label> Cliente* </label>
              <input type="text" class="form-control" id="cliente" name="cliente" required />
            </div>

            <div class="col">
              <label> Contato do Cliente* </label>
              <input type="text" class="form-control" name="contato" required />
            </div>
            
          </div>

          <div class="row">
            
            <div class="col">
              <label> Endereço do Cliente* </label>
              <input type="text" class="form-control" name="endereco" required />
            </div>
          </div>
        </div>

        <div class="container-fluid" id="divprinc2">
          
          <div class="row">
            
            <div class="col">
              <datalist id="equips">
                <option value="Notebook"> </option>
                <option value="Computador"> </option>
                <option value="Celular"> </option>
                <option value="Impressora"> </option>
              </datalist>

              <label> Equipamento* </label>
              <input type="text" id="equip" class="form-control" list="equips" name="equipamentos" required />
            </div>

            <div class="col">
              <datalist id="marcas">
                <option value="Acer"> </option>
                <option value="Apple"> </option>
                <option value="ASUS"> </option>
                <option value="Dell"> </option>
                <option value="LG"> </option>
                <option value="Motorola"> </option>
                <option value="Positivo"> </option>
                <option value="Samsung"> </option>
                <option value="Xiaomi"> </option>
              </datalist>

              <label> Marca* </label>
              <input type="text" class="form-control" list="marcas" name="marca" required />
            </div>

            <div class="col">
              <label> Modelo* </label>
              <input type="text" class="form-control" id="modelo" name="modelo" required />
            </div>
            
          </div>

          <div class="row">
            
            <div class="col">
              <label>  Nº de Série/IMEI</label>
              <input type="text" class="form-control" id="nserie" name="numeroSerie" placeholder="OPCIONAL"/>
            </div>

            <div class="col">
              <label> Acessórios </label>
              <input type="text" class="form-control" name="acessorios" placeholder="OPCIONAL" />
            </div>
            
          </div>
        </div>

        <div class="container-fluid" id="divprinc3">
          
          <div class="row">
            
            <div class="col">
              <label> Defeito Relatado* </label>
              <textarea rows="6" class="form-control" placeholder="Problema informado pelo cliente." name="defeito" required> </textarea>
            </div>

            <div class="col">
              <label for="floatingTextarea2"> Observações* </label>
              <textarea rows="6" class="form-control" placeholder="Senhas, avarias visiveis e etc." name="observacoes" required> </textarea>
            </div>
            
          </div>

          <div class="row">
            <div class="col">
              <button type="button" id="btsalv" class="click">Salvar</button>
            </div>
          </div>

          <div class="popup_box">
            <h1>A ordem de serviços será cadastrada!</h1>

            <div class="btns">
              <button type="button" class="btn1">Cancelar</button>
              <input type="submit" name="submit" class="btn2" onclick="teste()" value="Confirmar">
            </div>
          </div>
        </div>
      </form>
    </div>

    <script src="js/scriptos.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
