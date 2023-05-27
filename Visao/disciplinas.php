<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ACADSYS - Disciplinas </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {

      background-color: #204969;
      padding-top: 60px;

    }

    .container {

      background-color: #ffffff;
      color: #000000;
      border-radius: 10px;
      padding: 20px;
      width: 70%;
      margin: 0 auto;

    }

    th {

      text-align: center;
      font-size: 18px;
      font-weight: bold;
      border-bottom: 2px solid #dee2e6;

    }

    td {

      border-left: 2px solid #dee2e6;
      border-right: 2px solid #dee2e6;
      border-bottom: 2px solid #dee2e6;
      padding: 8px;

    }

    td:first-child {

      border-left: none;

    }

    td:last-child {

      border-right: none;

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
        <li class="nav-item">
          <a class="nav-link" href="menu.php"> Início </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cad_aluno.php"> Aluno </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cad_prof.php"> Professor </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="disciplinas.php"> Disciplinas <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <h2 align="center"> Controle de Disciplinas </h2> <br><br>
    <table class="table">
      <thead>
        <tr>
          <th> Matéria </th>
          <th> Professores </th>
          <th> Alunos </th>
        </tr>
      </thead>
      <tbody>
        <?php include 'processa_disc.php'; ?>
      </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>