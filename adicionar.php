<?php

include('protect.php');

include('protect.php');

$usuario = "root";
$senha = "";
$database = "login";
$host = "localhost";


$con = mysqli_connect($host, $usuario, $senha, $database) or die("Erro de conexão");

if(isset($_POST['adicionar'])){
    $imc = $_POST['imc'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $Circunferencia_abdominal = $_POST['Circunferencia_abdominal'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $codigo = $_POST['codigo'];
    $query = mysqli_query($con, "INSERT INTO informacoes (imc, peso, altura, Circunferencia_abdominal, idade, sexo, codigo) VALUES ('$imc' , '$peso' ,  '$altura' , '$Circunferencia_abdominal' , '$idade' , '$sexo', '$codigo') ");

    if($query){
        echo 'informações adicionadas com sucesso';
    } else {
        echo 'Não foi possivel adicionar as informações';
    }
}

?>

<html>
    <head>
        <title>CADASTRAR</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
    <header><!-- inicio Cabecalho -->
      <nav  class="navbar navbar-expand-sm navbar-light">
        
        <div class="container">
          
          <a href="#" class="navbar-brand">
           logo
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="home.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="pesquisa.php" class="nav-link">Pesquisar</a>
              </li>
              <li class="nav-item">
                <a href="adicionar.php" class="nav-link">Adicionar</a>
              </li>
              <li class="nav-item">
                <a href="consultar.php" class="nav-link">consultar</a>
              </li>
              <li class="nav-item">
                <a href="consultar.php" class="btn btn-outline-dark ml-4">Editar</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header><!--/fim Cabecalho -->

        <form method="post">
            <label>IMC:</label><br/>
            <input type="text" name="imc"><br/><br/>
            
            <label>PESO:</label><br/>
            <input type="text" name="peso"><br/><br/>
                
            <label>ALTURA:</label><br/>
            <input type="text" name="altura"><br/><br/>
                
            <label>Circunferencia abdominal:</label><br/>
            <input type="text" name="Circunferencia_abdominal"><br/><br/>
                
            <label>IDADE:</label><br/>
            <input type="text" name="idade"><br/><br/>
                
            <label>SEXO:</label><br/>
            <input type="text" name="sexo"><br/><br/>

            <label>CODIGO:</label><br/>
            <input type="text" name="codigo"><br/><br/>
                
            <button type="submit" name="adicionar">ADICIONAR</button>
        </form>
    </body>
</html>