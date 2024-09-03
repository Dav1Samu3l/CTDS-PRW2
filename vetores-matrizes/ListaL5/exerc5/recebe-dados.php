<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="exerc5.css">
</head> 

<body> 
 <h1> Tratamento de matrizes em PHP - listaL5 - exercício 5 - resposta do servidor </h1>
 <?php
  //criando variáveis escalares para receber os dados do formulário
  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  $matric1 = $_POST["matric1"];
  $matric2 = $_POST["matric2"];
  $matric3 = $_POST["matric3"];

  $media1  = $_POST['media1'];
  $media2  = $_POST['media2'];
  $media3  = $_POST['media3'];

  //vamos criar a matriz, que deve ter a matrícula como índice associativo. Forma 1
  $matrizAlunos[$matric1][0] = $aluno1;
  $matrizAlunos[$matric1][1] = $media1;
  $matrizAlunos[$matric2][0] = $aluno2;
  $matrizAlunos[$matric2][1] = $media2;
  $matrizAlunos[$matric3][0] = $aluno3;
  $matrizAlunos[$matric3][1] = $media3;

  foreach ($matrizAlunos as $matricula => $vetorInterno) {
    $vetorAux[$matricula] =  $vetorInterno[1];
  }
   arsort($vetorAux);
  echo "<table>
  <caption> Lista de alunos</caption>
  
  
  
  
  </table>"
 ?> 
</body> 
</html> 