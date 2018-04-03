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













/*$count = 0;
while ($count <= 9){
    echo "[$count] Eu estou aprendendo a programar <br>";
    $count++;
}

echo "Saiu do laço de repetição";
*/

/*$count = 0;
for ($i = 0; $i < 10; $i++) {
	echo "[$count] Eu estou aprendendo a programar <br>";
}*/



/*
//exemplo2
$i = 0;
$n = 5;
while ($i < $n) 
{
    echo "*";
    $i++;
}

 */


/* exemplo 1

$count = 0;

while($count < 10) 
{
    echo "[$count] Estou aprendendo a programar! <br>";
    $count++;
}
 
 */

/*exercicio 1
 *
 
$count = 0;

while($count <= 9) 
{
    echo "[$count] - ";
    $count++;
}

echo "[$count]";

*/


/* exercicio 2 */
/*
$numero = 30;
$soma = 0;

for ($i = 0; $i <=$numero; $i++){
    $soma += $i;
    echo "[$i]: $soma <br>";
    
}


echo "Soma: $soma";

*/

/* exercicio 6 */
/*

$i = 0;
$j = 0;

for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
 
*/

/* exercicio 7 */
/*
$char = "r";
$nome = "programar";
$count = 0;
$tamanho = strlen($nome);

for($i = 0; $i < $tamanho; $i++){
    echo "$nome[$i]";
    //echo substr($nome,$i,2);
    echo "<br>";
    if ($nome[$i] == $char){
       // echo substr($nome,$i,1);
        $count++;
    }
}
echo "Na palavra - $nome - tem $count letra(s) $char";
*/

/* exercicio 6 
 */
/*
$valor1 = 5;
$valor2 = 15;
$temp = $valor1;

echo "$temp <br>";

for ($i = $valor1; $i < ($valor2 - 1); $i++){
    $temp = $temp + 1;
    echo "$temp <br>";
}
*/


/*fatorial - Exercicio 7 */
/*
$numero = 3;
$temp = 3;
$fat = 1;
while ($numero > 1){
    $fat *= $numero;
    $numero--;
}

echo "Fatorial de $temp = $fat";
*/

/*$valor1 = 3;
$valor2 = 5;
$resultado = 0;

for ($i = $valor1; $i <= $valor2; $i++){
    $resultado += $valor2;
    echo "($valor1 * $valor2) : $valor2 + $valor2 = $resultado <br> ";
}*/
 
?>
 