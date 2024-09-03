<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="exerc6.css">
</head> 

<body> 
 <h1> Tratamento de matrizes em PHP - listaL5 - exercício 6 - resposta do servidor </h1>
 <?php
  $medic1 = $_POST['medic1'];
  $medic2 = $_POST['medic2'];
  $medic3 = $_POST['medic3'];

  $codigo1 = $_POST["codigo1"];
  $codigo2 = $_POST["codigo2"];
  $codigo3 = $_POST["codigo3"];

  $preco1  = $_POST['preco1'];
  $preco2  = $_POST['preco2'];
  $preco3  = $_POST['preco3'];
 
  $matrizRemedios = [$codigo1 => [$medic1, $preco1],
                     $codigo2 => [$medic2, $preco2],
                     $codigo3 => [$medic3, $preco3]];

              
  $codigoPesquisado = $_POST['pesquisa-remedio'];

  echo "<table>
         <caption> Farmácias AAA - relação de medicamentos cadastrados </caption>
         <tr>
           <th> Código do medicamento </th>
           <th> Nome do medicamento </th>
           <th> Preço do medicamento </th>
         </tr>";

  foreach($matrizRemedios as $codigo => $vetorInterno)
   {
   echo "<tr>
          <td> $codigo </td>
          <td> $vetorInterno[0] </td>
          <td> $vetorInterno[1] </td>
         </tr>";
   }
  echo "</table>";

  foreach($matrizRemedios as $codigo => $vetorInterno)
   {
   $vetorAuxiliar[$codigo] = $vetorInterno[1];
   }

  $precoRemedioMaisBarato  = min($vetorAuxiliar);
  $codigoRemedioMaisBarato = array_search($precoRemedioMaisBarato, $vetorAuxiliar);
  $nomeRemedioMaisBarato   = $matrizRemedios[$codigoRemedioMaisBarato][0];

  echo "<p> Caro usuário, o nome do medicamento mais barato cadastrado na matriz é <span> $nomeRemedioMaisBarato </span> </p>";


  // fazer a busca pelo indice da matriz a função array_kay_exist, para testar se o codigo do remedio pesquisado está na matriz,


  $encontrou = array_key_exists($codigoPesquisado, $matrizRemedios);
  if($encontrou){
    echo "<p> REmedio cadastraddo na matriz com os seguintes dados: <br> 
        codigo = <span> $codigoPesquisado </span> <br> 
        nome = <span> {$matrizRemedios[$codigoPesquisado][0]}   </span> 
        <br> preco = <span> {$matrizRemedios[$codigoPesquisado][1]} </span> </p>";
  }else{
    echo "<p> O remedio pesquisado: <span > ". $codigoPesquisado ."</span> não foi encontrado na matriz  </p>";
  }

  //  ordenar ordem po nome


  foreach($matrizRemedios as $codigoRemedio => $vetorInterno){

    $vetorAuxiliar[$codigoRemedio] = $vetorInterno[0];
  }
  
  asort($vetorAuxiliar);

  
  echo "<table>
         <caption> Farmácias AAA - relação de medicamentos cadastrados, ordenados pelo nome </caption>
         <tr>
           <th> Código do medicamento </th>
           <th> Nome do medicamento </th>
           <th> Preço do medicamento </th>
         </tr>";

  foreach($vetorAuxiliar as $codigo => $nomeMedicamento)
   {
   echo "<tr>
          <td> $codigo </td>
          <td> $nomeMedicamento </td>
          <td> {$matrizRemedios[$codigo][1]} </td>
         </tr>";
   }
  echo "</table>";











 













  echo "<form action='exerc6.html' method='post'>
          <button> Retornar ao início </button>
        </form>";
 ?> 
</body> 
</html> 