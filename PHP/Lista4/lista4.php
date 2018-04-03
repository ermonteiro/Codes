<?php

/*echo "----------- While ----------- <br/>";
$count = 0;
while($count < 10){
    echo "[$count]: Eu sei programar <br/>";
    $count++;
}
echo "FIM While <br/>";

echo "----------- FOR ----------- <br/>";
for($i = 0; $i < 10; $i++){
    echo "[$i]: Eu sei programar <br/>";
}
echo "FIM For <br/>";
*/

/* Exercicio 1 */
/* echo "Resposta do Alex <br/>";
$count = 0;
while($count <= 10){
    if($count == 0){
        echo "[$count]";
    } else if ($count != 0) {
        echo "- [$count]";
    }
    $count++;
}   
echo "</br> Resposta do Gabriel </br>";
$contador = 0;
while($contador < 10){
    echo "[$contador] -";
    if ($contador == 9){
       echo "[10]";
    }
    $contador++;
}

*/

/* Exercício 2 */
/* Crie um programa em PHP utilizando o For que mostre todos os números inteiros existentes entre 0 e 
50 e mostre a soma de todos esses números */
/*
$soma = 0;
for($i = 1; $i < 50; $i++){
    echo "[$i] <br/>";
    $soma = $soma + $i;
}
echo "----> Soma: $soma";
*/

/* Exercício 3 */
$soma = 0;
for($i = 0; $i < 501; $i+=2){
    //echo "[$i] <br/>";
    $soma = $soma + $i;
}
echo "----> Soma: $soma";