<?php

include('conexao.php');

if(!empty($_GET['id'])){

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM informacoes WHERE id=$id";

    $result = $mysqli->query($sqlselect);

    if($result->num_rows > 0)
    {
        while($User_data = mysqli_fetch_assoc($result)){
            $imc = $User_data['imc'];
            $peso = $User_data['peso'];
            $altura = $User_data['altura'];
            $Circunferencia_abdominal = $User_data['Circunferencia_abdominal'];
            $idade = $User_data['idade'];
            $sexo = $User_data['sexo'];
            $codigo = $User_data['codigo'];
            
        }
       
    }
    else
    {
        header('location: editar.php');
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
                <a href="editar.php" class="btn btn-outline-dark ml-4">Editar</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header><!--/fim Cabecalho -->
    <a href="editar.php">    
      <button class="btn btn-primary" >Voltar</button>
    </a>

        <form action="SaveEdit.php" method="POST">
            <label>IMC:</label><br/>
            <input type="text" name="imc" value='<?php echo $imc ?>'><br/><br/>
            
            <label>PESO:</label><br/>
            <input type="text" name="peso" value='<?php echo $peso ?>'><br/><br/>
                
            <label>ALTURA:</label><br/>
            <input type="text" name="altura" value='<?php echo $altura ?>'><br/><br/>
                
            <label>Circunferencia abdominal:</label><br/>
            <input type="text" name="Circunferencia_abdominal" value='<?php echo $Circunferencia_abdominal ?>'><br/><br/>
                
            <label>IDADE:</label><br/>
            <input type="text" name="idade" value='<?php echo $idade ?>'><br/><br/>
                
            <label>SEXO:</label><br/>
            <input type="text" name="sexo" value='<?php echo $sexo ?>'><br/><br/>

            <label>CODIGO:</label><br/>
            <input type="text" name="codigo" value='<?php echo $codigo ?>'><br/><br/>

            <input type="hidden" name= "id" value="<?php echo $id?>">
                
            <button type="submit" name="update">Editar</button>
        </form>
    </body>
</html>