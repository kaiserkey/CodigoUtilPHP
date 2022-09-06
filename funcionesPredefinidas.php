<?

# var_dump()  Muestro lo que tiene dentro una variable, una matriz, un arreglo, un objeto
# Se utiliza para debuggear codigo

$arreglo = array('Hola' => 'Mundo');
$entero = 10;
$matriz = array(array(1,2,3),
                array(4,5,6),
                array(7,8,9));

var_dump($arreglo);
var_dump($entero);
var_dump($matriz);

# echo date(‘d-m-Y’) imprimir fechas

echo "La fecha Actual es: " . date('d-M-Y') . "<br>";

# Funciones matematicas 
echo 'La raiz cuadrada de 4 es: ' . sqrt(4). "<br>";

echo 'Número aleatorio entre 1 y 10: ' . rand(1,10). "<br>";

echo 'Redondeo: ' . round(3.45678). "<br>"; //Mostraría 3

echo 'Redondeo: ' . round(3.5678). "<br>"; //Mostraría 4

echo 'Redondeo: ' . round(3.5678,2). "<br>"; //Mostraría 3.57

$arreglo2 = array(0,1,2,3,4,5);

echo 'El valor maximo es: ' . max($arreglo2). "<br>";
echo 'El valor minimo es: ' . min($arreglo2). "<br>";

# Funciones para variables
$int = 10;
$string = " Hola Mundo ";
echo gettype($int). "<br>"; //Mostraría integer
echo is_string($string). "<br>";//Retorna 1 para true y 0 para false
echo is_numeric($int). "<br>";
echo isset($int). "<br>"; //muestra si existe la variable o no existe, retorna un valor booleano
echo trim($string). "<br>"; //Elimina espacios por delante y por detrás de una variable. Muy útil para formularios.
var_dump(empty($string)) . "<br>"; //Comprueba si una variable está vacía

# Funciones para cadenas de texto
$texto = 'Esto es un texto para pruebas';

echo strlen($texto) . "<br>"; //Contar caracteres de una cadena de texto (de un string)
echo strpos($texto, 'un') . "<br>"; //muestra la posicion de un carácter o texto dentro de una cadena de caracteres.
$texto=str_replace('para', 'de', $texto); //remplaza palabras de una cadena de caracteres
echo $texto . "<br>";
$texto1 = 'TEXTO1';
$texto2 = 'texto2';
echo 'Texto Original: Variable $texto1= ' . $texto1 . "<br>"; 
echo 'ToLower: ' . strtolower($texto1) . "<br>";//convierte a minúsculas
echo 'Texto Original: Variable $texto1= ' . $texto2 . "<br>"; 
echo 'ToUpper: ' . strtoupper($texto2) . "<br>";//coonvierte a mayúsculas
//divide una cadena segun el delimitador y combierte cada caracter en un elemento de un array, 
//tambien agrega los espacios en blanco
print_r(str_split("Esta es la cadena que vamos a dividir en fragmentos de 4 caracteres",1));
echo "<br>";
//divide y convierte una cadena segun el delimitador
$cadena = "uno,dos,tres,cuatro,cinco";
$array = explode(",", $cadena);
echo "<br><br>El número de elementos en el array es: " . count($array);

# Funciones para arreglos
$ordenarArreglo = array('z', 'f', 'g', 'i', 'a', 's', 'd', 'c');
asort($ordenarArreglo); //Ordena Alfabéticamente
var_dump($ordenarArreglo)  . "<br>";
arsort($ordenarArreglo);// Ordena Alfabéticamente en orden inverso
var_dump($ordenarArreglo)  . "<br>";
array_push($ordenarArreglo,'k'); //Añadir elementos a la última posición del array
var_dump($ordenarArreglo)  . "<br>";
array_pop($ordenarArreglo); //Quita el elemento de la última posición del array
var_dump($ordenarArreglo)  . "<br>";
unset($ordenarArreglo[0]); //Quita el elemento del array de la posición indicada
var_dump($ordenarArreglo)  . "<br>";
var_dump(array_search('a', $ordenarArreglo)); //Busca un elemento dentro de un array
var_dump(count($ordenarArreglo));//Cuenta los elementos de un array
//destruir una o mas variables con unset()
$foo = array('DB' => 'compras', 'OtroElemento' => 'ventas');
var_dump($foo); 
echo "<br>";
unset($foo);
echo "<br>";
var_dump($foo);
echo "<br>";
$foo = array('DB' => 'compras', 'OtroElemento' => 'ventas');
//destruir solo un elemento del arreglo
unset($foo['OtroElemento']);
var_dump($foo);


?>