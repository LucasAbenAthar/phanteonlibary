<!-- <?php
require_once "config/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos "name" e "password" existem no array $_POST
    if (isset($_POST["name"]) && isset($_POST["password"])) {
        $name = $_POST["name"];
        $password = $_POST["password"];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (name, password) VALUES (?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name, $hashed_password);

        if ($stmt->execute()) {
            $message = "Usuário criado com sucesso";
        } else {
            $message = "Erro: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    } else {
        $message = "Os campos 'name' e 'password' são obrigatórios.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/956e0f29ae.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <title>Cadastro de Usuário</title>
</head>

<div class="background"></div>
<div class="container">
  <div class="content2">
    <h2 class="logo">
      <i class="fa-solid fa-book-open-reader"></i> Phanteon Library
    </h2>
    <div class="text-sci">
      <h2>
        <?php // if (isset($message)): ?>
        <?php // echo $message; ?>
        <?php // endif; ?><br></br>
      </h2>
      <p>Por favor, clique no botão de "Voltar" para continuar.</p>
      <form action="index.php" method="POST">
        <button type="submit" class="btn">Voltar</button>
      </form>
    </div>
  </div>

  <script src="js/index.js"></script>

  </body>

</html> -->
