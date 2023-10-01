<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } 
    if(strlen($_POST['email']) == 0  AND strlen($_POST['senha']) == 0){
        echo " \r\n e preencha sua senha";
    }
    else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } 
        else if(strlen($_POST['email']) != 0 AND $quantidade != 1){
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <title>Bootstrap Login Form</title>
  </head>
  <body>
    <section>
      <div class="container mt-5 pt-5"><!--centralizar no meio-->
        <div class="row">
          <div class="col-12 col-sm-7 col-md-6 m-auto "><!--responsividade-->
            <div class="card border-0 shadow" style="border-radius: 25px;"><!--sombra e canto redondo-->
              <div class="card-body m-4"><!--tamanho da caixa-->
                <h1 class="d-flex justify-content-center">Faça seu login</h1><!--centraliza o texto no meio-->
                <form action="" method="POST">
                  <input type="text" name="email" id="" class="form-control my-4 py-2" placeholder="Email" />
                  <input type="password" name="senha" id="" class="form-control my-4 py-2" placeholder="Senha" />
                  <div class="text-center mt-3">
                    <button class="btn btn-primary">Login</button>
                    <a href="#" class="nav-link">nao tem uma conta?</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>

