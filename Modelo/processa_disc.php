<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "ACADSYS";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
    
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);

 }

 // Matemática

 echo "<tr>";
 echo "<td>Matemática</td>";
 echo "<td>";

 $sql_professores_matematica = "SELECT nome FROM cadastro_prof WHERE materias LIKE '%Matemática%'";
 $result_professores_matematica = $conn->query($sql_professores_matematica);

 if ($result_professores_matematica->num_rows > 0) {

    $professores_matematica = array();

    while ($row_professores_matematica = $result_professores_matematica->fetch_assoc()) {


        $professores_matematica[] = $row_professores_matematica["nome"];

    }

    echo implode (", ", $professores_matematica);

 }  

 else {

    echo "Nenhum professor encontrado.";

 }
          
 echo "</td>";
 echo "<td>";
          
 $sql_alunos_matematica = "SELECT nome FROM cadastro_alunos WHERE materias LIKE '%Matemática%'";
 $result_alunos_matematica = $conn->query($sql_alunos_matematica);

 if ($result_alunos_matematica->num_rows > 0) {

 $alunos_matematica = array();

 while ($row_alunos_matematica = $result_alunos_matematica->fetch_assoc()) {
                
    $alunos_matematica[] = $row_alunos_matematica["nome"];

 }

 echo implode (", ", $alunos_matematica);

 } 

 else {

    echo "Nenhum aluno encontrado.";

 }

 echo "</td>";
 echo "</tr>";

 // Português

 echo "<tr>";
 echo "<td>Português</td>";
 echo "<td>";

 $sql_professores_portugues = "SELECT nome FROM cadastro_prof WHERE materias LIKE '%Português%'";
 $result_professores_portugues = $conn->query($sql_professores_portugues);

 if ($result_professores_portugues->num_rows > 0) {

    $professores_portugues = array();

    while ($row_professores_portugues = $result_professores_portugues->fetch_assoc()) {

        $professores_portugues[] = $row_professores_portugues["nome"];

    }

 echo implode (", ", $professores_portugues);

 }  

 else {

    echo "Nenhum professor encontrado.";

 }
          
 echo "</td>";
 echo "<td>";
          
 $sql_alunos_portugues = "SELECT nome FROM cadastro_alunos WHERE materias LIKE '%Português%'";
 $result_alunos_portugues = $conn->query($sql_alunos_portugues);

 if ($result_alunos_portugues->num_rows > 0) {

    $alunos_portugues = array();

    while ($row_alunos_portugues = $result_alunos_portugues->fetch_assoc()) {
                
        $alunos_portugues[] = $row_alunos_portugues["nome"];

    }

 echo implode (", ", $alunos_portugues);

 } 

 else {

    echo "Nenhum aluno encontrado.";

 }

 echo "</td>";
 echo "</tr>";

 // Biologia

 echo "<tr>";
 echo "<td>Biologia</td>";
 echo "<td>";

 $sql_professores_biologia = "SELECT nome FROM cadastro_prof WHERE materias LIKE '%Biologia%'";
 $result_professores_biologia = $conn->query($sql_professores_biologia);

 if ($result_professores_biologia->num_rows > 0) {

    $professores_biologia = array();

    while ($row_professores_biologia = $result_professores_biologia->fetch_assoc()) {

        $professores_biologia[] = $row_professores_biologia["nome"];

    }
            
 echo implode (", ", $professores_biologia);
            
 }

 else {

    echo "Nenhum professor encontrado.";

 }
          
 echo "</td>";
 echo "<td>";
          
 $sql_alunos_biologia = "SELECT nome FROM cadastro_alunos WHERE materias LIKE '%Biologia%'";
 $result_alunos_biologia = $conn->query($sql_alunos_biologia);

 if ($result_alunos_biologia->num_rows > 0) {

    $alunos_biologia = array();

    while ($row_alunos_biologia = $result_alunos_biologia->fetch_assoc()) {
                
        $alunos_biologia[] = $row_alunos_biologia["nome"];

    }

 echo implode (", ", $alunos_biologia);

 } 

 else {

    echo "Nenhum aluno encontrado.";

 }

 echo "</td>";
 echo "</tr>";

 // Química

 echo "<tr>";
 echo "<td>Química</td>";
 echo "<td>";

 $sql_professores_quimica = "SELECT nome FROM cadastro_prof WHERE materias LIKE '%Química%'";
 $result_professores_quimica = $conn->query($sql_professores_quimica);

 if ($result_professores_quimica->num_rows > 0) {

    $professores_quimica = array();

    while ($row_professores_quimica = $result_professores_quimica->fetch_assoc()) {

        $professores_quimica[] = $row_professores_quimica["nome"];

    }
            
 echo implode (", ", $professores_quimica);
            
 }

 else {

    echo "Nenhum professor encontrado.";

 }
          
 echo "</td>";
 echo "<td>";
          
 $sql_alunos_quimica = "SELECT nome FROM cadastro_alunos WHERE materias LIKE '%Química%'";
 $result_alunos_quimica = $conn->query($sql_alunos_quimica);

 if ($result_alunos_quimica->num_rows > 0) {

    $alunos_quimica = array();

    while ($row_alunos_quimica = $result_alunos_quimica->fetch_assoc()) {
                
        $alunos_quimica[] = $row_alunos_quimica["nome"];

    }

 echo implode (", ", $alunos_quimica);

 } 

 else {

    echo "Nenhum aluno encontrado.";

 }

 echo "</td>";
 echo "</tr>";

 // Física

 echo "<tr>";
 echo "<td>Física</td>";
 echo "<td>";

 $sql_professores_fisica = "SELECT nome FROM cadastro_prof WHERE materias LIKE '%Física%'";
 $result_professores_fisica = $conn->query($sql_professores_fisica);

 if ($result_professores_fisica->num_rows > 0) {

    $professores_fisica = array();

    while ($row_professores_fisica = $result_professores_fisica->fetch_assoc()) {

        $professores_fisica[] = $row_professores_fisica["nome"];

    }
            
 echo implode (", ", $professores_fisica);
            
 }

 else {


    echo "Nenhum professor encontrado.";

 }
          
 echo "</td>";
 echo "<td>";
          
 $sql_alunos_fisica = "SELECT nome FROM cadastro_alunos WHERE materias LIKE '%Física%'";
 $result_alunos_fisica = $conn->query($sql_alunos_fisica);

 if ($result_alunos_fisica->num_rows > 0) {

    $alunos_fisica = array();

    while ($row_alunos_fisica = $result_alunos_fisica->fetch_assoc()) {
                
        $alunos_fisica[] = $row_alunos_fisica["nome"];

    }

 echo implode (", ", $alunos_fisica);

 } 

 else {

    echo "Nenhum aluno encontrado.";

 }

 echo "</td>";
 echo "</tr>";

 // Geografia

 echo "<tr>";
 echo "<td>Geografia</td>";
 echo "<td>";

 $sql_professores_geografia = "SELECT nome FROM cadastro_prof WHERE materias LIKE '%Geografia%'";
 $result_professores_geografia = $conn->query($sql_professores_geografia);

 if ($result_professores_geografia->num_rows > 0) {

    $professores_geografia = array();

    while ($row_professores_geografia = $result_professores_geografia->fetch_assoc()) {

    $professores_geografia[] = $row_professores_geografia["nome"];

    }
            
 echo implode (", ", $professores_geografia);
            
 }

 else {

    echo "Nenhum professor encontrado.";

 }
          
 echo "</td>";
 echo "<td>";
          
 $sql_alunos_geografia = "SELECT nome FROM cadastro_alunos WHERE materias LIKE '%Geografia%'";
 $result_alunos_geografia = $conn->query($sql_alunos_geografia);

 if ($result_alunos_geografia->num_rows > 0) {

    $alunos_geografia = array();

    while ($row_alunos_geografia = $result_alunos_geografia->fetch_assoc()) {
                
    $alunos_geografia[] = $row_alunos_geografia["nome"];

    }

 echo implode (", ", $alunos_geografia);

 } 

 else {

    echo "Nenhum aluno encontrado.";

 }

 echo "</td>";
 echo "</tr>";

 // Inglês

 echo "<tr>";
 echo "<td>Inglês</td>";
 echo "<td>";

 $sql_professores_ingles = "SELECT nome FROM cadastro_prof WHERE materias LIKE '%Inglês%'";
 $result_professores_ingles = $conn->query($sql_professores_ingles);

 if ($result_professores_ingles->num_rows > 0) {

    $professores_ingles = array();

    while ($row_professores_ingles = $result_professores_ingles->fetch_assoc()) {

        $professores_ingles[] = $row_professores_ingles["nome"];

    }
            
 echo implode (", ", $professores_ingles);
            
 }

 else {

    echo "Nenhum professor encontrado.";

 }
          
 echo "</td>";
 echo "<td>";
          
 $sql_alunos_ingles = "SELECT nome FROM cadastro_alunos WHERE materias LIKE '%Inglês%'";
 $result_alunos_ingles = $conn->query($sql_alunos_ingles);

 if ($result_alunos_ingles->num_rows > 0) {

    $alunos_ingles = array();

    while ($row_alunos_ingles = $result_alunos_ingles->fetch_assoc()) {
                
        $alunos_ingles[] = $row_alunos_ingles["nome"];

    }

 echo implode (", ", $alunos_ingles);

 } 

 else {

    echo "Nenhum aluno encontrado.";

 }

 echo "</td>";
 echo "</tr>";

 $conn->close();

?>