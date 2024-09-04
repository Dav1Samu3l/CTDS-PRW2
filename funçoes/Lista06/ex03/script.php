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

$temperatura = $_POST['temperatura'];
$escala = $_POST['escala'];



function coverteDeFpC($temperatura) {
    $tempConvertida =( $temperatura - 32)* 5/9;
  echo  " <form> <p>A temperatura em Farenheit é{ $tempConvertida}°C</p></form>";
}

function converteDeCpF($temperatura) {
    $tempConvertida = ($temperatura * 9/5) + 32;
    echo "<form> <p>A temperatura em Celsius é {$tempConvertida}°F</p></form>";
}


if($escala == "deFparaC"){
    coverteDeFpC($temperatura);
}else{
    converteDeCpF($temperatura);
}

// function converte($temperatura, $escala){ 
//     if ($escala == "deCparaF") {
//         $farenheit = $temperatura * 1.8 + 32;
//         echo " <form> <p>A temperatura em Farenheit é $farenheit</p></form>";
//     } else if ($escala == "deFpataC") {
//         $celsius = ($temperatura - 32) / 1.8;
//         echo "<form> <p>A temperatura em Celsius é $celsius</p></form>";
//     } 
//     return [$temperatura, $escala];
// };

// converte($temperatura, $escala);

?>

</body>
</html>