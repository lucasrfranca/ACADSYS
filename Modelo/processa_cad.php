<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ACADSYS";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Erro na conexão com o banco de dados: " . $conn->connect_error);

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit_aluno'])) {
$nome = @$_POST['nome'];
$email = @$_POST['email'];
$matricula = @$_POST['matricula'];
$cpf = @$_POST['cpf'];
$curso = @$_POST['curso'];
$materias = @$_POST['materias'];


if (isset($_POST['materias']) && is_array($_POST['materias'])) {

    $materias = implode(', ', $_POST['materias']);

  } 

else {

    $materias = '';

  }
        
$sql = "INSERT INTO cadastro_alunos (nome, email, matricula, cpf, curso, materias) 
        VALUES ('$nome', '$email', '$matricula', '$cpf', '$curso', '$materias') ";

if (isset($_POST['materias']) && count($_POST['materias']) > 0 && $conn->query($sql) === TRUE) {
  
    echo "<script>alert('Cadastro realizado com sucesso.');</script>";
    echo "<script>window.location.href = 'menu.php';</script>";

} 

else {
    
    echo "<script>alert('É necessário marcar pelo menos uma matéria.');</script>";
    echo "<script>window.location.href = 'cad_aluno.php';</script>";

}
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit_prof'])) {
        $nome = @$_POST['nome'];
        $email = @$_POST['email'];
        $matricula = @$_POST['matricula'];
        $cpf = @$_POST['cpf'];
        $materias = @$_POST['materias'];


        if (isset($_POST['materias']) && is_array($_POST['materias'])) {

            $materias = implode(', ', $_POST['materias']);
        
          } 
        
        else {
        
            $materias = '';
        
          }
                
        $sql = "INSERT INTO cadastro_prof (nome, email, matricula, cpf, materias) 
                VALUES ('$nome', '$email', '$matricula', '$cpf', '$materias') ";
        
        if (isset($_POST['materias']) && count($_POST['materias']) > 0 && $conn->query($sql) === TRUE) {
          
            echo "<script>alert('Cadastro realizado com sucesso.');</script>";
            echo "<script>window.location.href = 'menu.php';</script>";
        
        } 
        
        else {
            
            echo "<script>alert('É necessário marcar pelo menos uma matéria.');</script>";
            echo "<script>window.location.href = 'cad_prof.php';</script>";
        
        }
    }
}
}

$conn->close();

?>