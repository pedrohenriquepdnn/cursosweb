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
  <title>Conteúdo do Curso - O Coach Mentiroso</title>
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
      <h2 class="text-center mb-4">Curso de Persuasão Nível 1</h2>
      <p class="text-center mb-5">Bem-vindo ao conteúdo exclusivo do curso! Abaixo, você encontrará as lições, materiais e atividades para completar o curso.</p>

      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Módulo 1: Introdução à Persuasão
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul>
                <li><a href="#">Aula 1.1: O que é Persuasão?</a></li>
                <li><a href="#">Aula 1.2: Técnicas Básicas de Convencimento</a></li>
                <li><a href="#">Aula 1.3: A Arte de Convencer sem Argumentos</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Módulo 2: Aplicando a Persuasão no Dia a Dia
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul>
                <li><a href="#">Aula 2.1: Técnicas Avançadas de Persuasão</a></li>
                <li><a href="#">Aula 2.2: Como Influenciar Pessoas em Conversas Cotidianas</a></li>
                <li><a href="#">Aula 2.3: Persuasão nas Redes Sociais</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Módulo 3: Persuasão Profissional
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul>
                <li><a href="#">Aula 3.1: Negociações e Vendas</a></li>
                <li><a href="#">Aula 3.2: A Persuasão no Mundo Corporativo</a></li>
                <li><a href="#">Aula 3.3: Como Manter Relacionamentos Profissionais</a></li>
              </ul>
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
