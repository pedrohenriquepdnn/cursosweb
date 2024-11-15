<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meus Cursos - O Coach Mentiroso</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    body {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    footer {
      margin-top: auto;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="mainpage.html">O Coach Mentiroso</a>
      <ul class="nav justify-content-end align-items-center">
        <li class="nav-item"><a class="nav-link text-light" href="#">Aprenda a Mentir</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="https://www.instagram.com/pablomarcal1/?hl=pt-br">Contato</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#">Blog da Farsa</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="meus_cursos.php">Meus Cursos</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link text-light d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="logout.php">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Meus Cursos</h2>
      <div class="row">
        <!-- Curso 1 -->
        <div class="col-md-6 mb-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Curso de Persuasão Nível 1</h5>
              <p class="card-text">Aprenda as técnicas básicas para ser convincente em qualquer situação.</p>
              <a href="conteudo_curso.php" class="btn btn-warning">Acessar Curso</a>
            </div>
          </div>
        </div>
        <!-- Curso 2 -->
        <div class="col-md-6 mb-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Mentindo com Confiança</h5>
              <p class="card-text">Descubra como mentir sem que ninguém perceba (quase ninguém).</p>
              <a href="#" class="btn btn-warning">Acessar Curso</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-dark text-light py-4 text-center">
    <p>© 2024 O Coach Mentiroso. Nada do que foi dito aqui deve ser levado a sério.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
