<?
#prueba de funciones matematicas de php

#valor absoluto de un numero
echo "<br>El valor absoluto de -5 es: " . abs(-5);
#el maximo y minimo valor en un array 
$arreglo = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo "<br>El mayor numero encontrado en el arreglo mediante MAX es: " . max($arreglo) . 
        " Y el minimo encontrado con MIN es: " . min($arreglo);
#el maximo y minimo valor en una coleccion de numeros dados
echo "<br>El mayor numero encontrado entre los numeros dados 1, 2, 3, 4, 5 mediante MAX es: " . max(1, 2, 3, 4, 5) . 
        " Y el minimo encontrado con MIN es: " . min(1, 2, 3, 4, 5);
#Obtener el valor de PI con la funcion pi de php
echo "<br>El valor de PI es: " . pi(); 
#la raiz cuadrada de un numero dado con la funcion sqrt y redondeo de un numero float con round
echo "<br>La raiz cuadrada del numero 5 es: " . sqrt(5) . " Y el numero redondeado es: " . round(sqrt(5));
#generar un numero aleatorio entero con la funcion rand 
echo "<br>El numero aleatorio generado entre 1 y 10 es: " . rand(1, 10); 
#generar un numero aleatorio con decimales y con una presicion de 2 decimales
echo "<br>El numero aleatorio con decimales generado es: " . round(rand(1, 10)*pi(), 2);
#potencia de un numero
echo "<br>La potencia de 3 elevado a la 3 es: " . pow(3,3);


?>