<?php 
    
    
    include('conexao.php');

     if(isset($_POST['update'])){

        $imc = $_POST['imc'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $Circunferencia_abdominal = $_POST['Circunferencia_abdominal'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $codigo = $_POST['codigo'];


        $sqlUpdate = "UPDATE informacoes SET imc='$imc', peso='$peso', altura='$altura', Circunferencia_abdominal='$Circunferencia_abdominal', idade='$idade', sexo='$sexo', codigo='$codigo' WHERE id='$id'"; 

        $result = $mysqli->query($sqlUpdate);
        header('location: editar.php');
     }
     
     

?>