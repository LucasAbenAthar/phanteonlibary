<!-- <?php
  // require_once "config/config.php";

  // if($_SERVER["REQUEST_METHOD"] == "POST") {
  //   $name= $_POST["name"];
  //   $password = $_POST["password"];
  // }

  // $sql = "SELECT * FROM users WHERE name= ?";

  // $stmt = $conn->prepare($sql);
  // $stmt -> bind_param("s", $name);
  // $stmt -> execute();

  // $result = $stmt -> get_result();

  // if($result -> num_rows > 0){
  //   $row = $result -> fetch_assoc();
  //   if(password_verify($password, $row["password"])){
  //     $_SESSION["loggedin"] = true;
  //     header("location: login.php");
  //     exit;
  //   }
  // }
  // else{
  //   $error = "Usuário ou senha inválidos";
  // }

?> -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <script src="https://kit.fontawesome.com/956e0f29ae.js" crossorigin="anonymous"></script>
  <title>Login - Phanteon Library</title>
</head>

<body>
  <div class="background"></div>
  <div class="container">
    <div class="content">
      <h2 class="logo">
        <i class="fa-solid fa-book-open-reader"></i> Phanteon Library
      </h2>
      <div class="text-sci">
        <h2>
          Bem-vindo!<br><span>a Phanteon Library</span></br>
        </h2>
        <p>Por favor, entre ou registre-se para continuar.</p>
        <div class="social-icons">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
        </div>
      </div>
    </div>
    <div class="logreg-box">
      <div class="form-box login">
        <form action="login.php" method="POST">
          <h2>Login</h2>
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <input type="text" name='name' required>
            <label>Usuário</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-lock"></i></span>
            <input type="password" name='password' required>
            <label>Senha</label>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox">Lembrar de mim</label>
            <div>
              <a href="forgot.php">Esqueceu sua senha?</a>
            </div>
          </div>
          <button type="submit" class="btn">Entrar</button>
          <div class="register-link">
            <p>Ainda não possui uma conta? <a href="#" class="register-link">Criar Conta</a></p>
          </div>
        </form>
      </div>
      <div class="form-box register">
        <form action="cadastro.php" method="POST">
          <h2>Criar Conta</h2>
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <input type="text" name='name' required>
            <label>Nome de Usuário</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-lock"></i></span>
            <input type="password" name='password' required>
            <label>Senha</label>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox" required>Eu concordo com os termos & condições</label>
          </div>
          <button type="submit" class="btn">Criar Conta</button>
          <div class="login-link">
            <p>Ja possui uma conta? <a href="#" class="login-link">Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/index.js"></script>
</body>

</html>
