<html lang="pt br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ACADSYS - Sistema Acadêmico  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {

      background-color: #204969;
      padding-top: 60px;

    }
    .navbar-nav .nav-link {
      
      font-size: 18px;

    }
    .jumbotron-custom {
      background-color: #204969;
      color: #ffffff;
    }
    .jumbotron-title {

      background-color: #1b3c55;
      padding: 50px;
      color: #ffffff;
      border-radius: 10px;
      width: 70%; 
      margin: 0 auto; 
      
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"> Ínicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cad_aluno.php"> Aluno </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cad_prof.php"> Professor </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="disciplinas.php"> Disciplinas </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="jumbotron jumbotron-fluid jumbotron-custom">
    <div class="container text-center">
      <div class="jumbotron-title rounded" >
      <h1 class="display-4"> Bem-vindo ao ACADSYS! </h1>
      <p class="lead"> <font size="+1"> Um sistema acadêmico totalmente integrado entre Alunos, Professores e Instituição </p> </font></div> <br><br>
      <p class="lead"> Este sistema visa criar um ambiente que possibilita o usuário de realizar um cadastro 
         e se matricular em disciplinas ofertadas. </p> 
      <p class="lead" align="justify"> &nbsp Aqui os Alunos e Professores poderão se inscrever nas disciplinas e ainda ter todo o controle delas.
         Além de faciltar o gerenciamento da própria Instituição acerca dos dados de seus alunos e professores e do controle
         de matrícula, o aluno acaba tendo mais transparência de informações acerca dos seus colegas de turma e do docente
         responsável pela disciplina escolhida, ao mesmo tempo que o professor terá de seus alunos matriculados nas disciplinas
         que lecionara. </p>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>