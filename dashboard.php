<?php
  session_start();
  if(empty($_SESSION)){
    print"<script>location.href = 'index.php';</script>";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/956e0f29ae.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <?php
        print"Ol�, " . $_SESSION["nome"];
        print"<a href='logout.php'><i class='fa-solid fa-right-from-bracket'></i> Sair</a>";
      ?>
      <a class="navbar-brand"><i class="fa-solid fa-book-open-reader"></i>Phanteon Library</a>
    </div>
  </nav>
</body>

</html>
