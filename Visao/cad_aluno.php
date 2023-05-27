<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ACADSYS - Cadastro de Aluno </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {

      background-color: #204969;
      padding-top: 60px;

    }
    .form-container {

      background-color: #ffffff;
      color: #000000;
      border-radius: 10px;
      padding: 20px;
      width: 70%;
      margin: 0 auto;

    }
    .form-title {

      margin-bottom: 20px;
      text-align: center;

    }
    .form-separator {

      margin: 20px 0;
      border: none;
      border-top: 2px solid #204969;

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
          <a class="nav-link" href="menu.php"> Ínicio <span class="sr-only">(current)</span></a>
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
  <div class="container">
    <div class="form-container">
      <h2 class="form-title"> Cadastro de Aluno </h2>
      <form method="POST" action="processa_cad.php">
        <div class="form-group">
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome completo" required>
        </div>
        <div class="form-group">
        <input type="email" name="email" class="form-control" id="email" placeholder="Digite o e-mail" required>
        </div>
        <div class="form-group">
        <input type="text" name="matricula" class="form-control" id="matricula" placeholder="Digite a matrícula" required>
        </div>
        <div class="form-group">
          <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digite o CPF" required>
        </div>
        <div class="form-group">
        <input type="text" name="curso" class="form-control" id="curso" placeholder="Digite o curso" required>
        </div>
        <hr class="form-separator">
        <div class="form-group">
          <label for="materias"> <font size="+1"> Escolha as disciplinas que deseja se inscrever: </label></font><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="materias[]" id="Matemática" value="Matemática">
            <label class="form-check-label" for="Matemática"> Matemática </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="materias[]" id="Português" value="Português">
            <label class="form-check-label" for="Português"> Português </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="materias[]" id="Biologia" value="Biologia">
            <label class="form-check-label" for="Biologia"> Biologia </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="materias[]" id="Química" value="Química">
            <label class="form-check-label" for="Química"> Química </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="materias[]" id="Física" value="Física">
            <label class="form-check-label" for="Física"> Física </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="materias[]" id="Geografia" value="Geografia">
            <label class="form-check-label" for="Geografia"> Geografia </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="materias[]" id="Inglês" value="Inglês">
            <label class="form-check-label" for="Inglês"> Inglês </label>
          </div>
        </div>
        <button type="submit" name="submit_aluno" class="btn btn-primary"> Enviar </button>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>