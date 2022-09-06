<?php
$producto = "Coca-Cola x 1,5 Lts.";
var_dump($producto);
# salida: string(20) "Coca-Cola x 1,5 Lts."
$producto = "";
var_dump($producto);
# salida: string(0) ""
$producto = NULL;
var_dump($producto);
# salida: NULL
unset($producto);
var_dump($producto);

/*
Generará un error, ya que la variable $producto ha sido destruida
Salida:
PHP Notice: Undefined variable: producto ...
NULL
*/

$a = 25;
$tipo_a = gettype($a);
echo $tipo_a; #imprimirá integer


$producto = "Coca-Cola x 1,5 Lts.";
echo isset($producto) ? "True" : "False";
# retorna True
$producto = "";
echo isset($producto) ? "True" : "False";
# Retorna True
$producto = NULL;
echo isset($producto) ? "True" : "False";
# retorna False
unset($producto);
echo isset($producto) ? "True" : "False";
# retorna False

/**
 * Estandarización de código
 * Utiliza nombres descriptivos para las variables;
 * Si el nombre es compuesto, separa cada palabra por un guión bajo;
 * Escribe los nombres de variables en minúsculas;
 * Cuando debas asignar múltiples valores a una variable,
 * utiliza una sola instrucción toda vez que sea posible;
 * Utiliza comillas dobles para encerrar las cadenas de texto,
 * en vez de comillas simples;
 * Utiliza espacios en blanco antes y después de un operador
 * aritmético para facilitar la lectura;
 */

?>