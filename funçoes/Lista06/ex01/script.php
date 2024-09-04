<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php
 $nome = $_POST['nome'];
 $nota1 = $_POST['nota1'];
 $nota2 = $_POST['nota2'];




  function valida($nome){

  $nomne = trim($nome);


     if ( strlen($nome) == 0) {
        echo ' <form> <fieldset id="meu-elemento">
        <p>O nome não pode estar em branco, preecha corretamente o campo nome</p>
      </fieldset> </form>';
      
      echo "<form action='index.html' method='post'>
      <button> Retornar ao início </button> 
    </form>";
     };
 };







 function media ($nome, $nota1, $nota2){
    $media = ($nota1 + $nota2) / 2;
    echo "<form> <h1> Media: doa launo : <h1>  $nome </h1> A media nota 1 e 2 é:<h1> $media </h1> </form>";
    return $media; 


 }


 function aprovado($media){
    if ($media >= 7) {
        echo "<form> <h1> Aluno aprovado! </h1> </form>";
    } else {
        echo "<form> <h1> Aluno reprovado! </h1> </form>";
    }
 }
 $aprovado = aprovado( $nota1, $nota2);
 valida($nome);
 media($nome,$nota1, $nota2);

echo " <form> <h1> Nome: $nome </h1> <p> Nota 1: $nota1 </p> <p> Nota 2: $nota2 </p> </form>";

?>

</body>
</html>