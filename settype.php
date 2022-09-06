<?

$a = "33 manzanas";
settype($a, "integer");
var_dump($a);
# int(33)

$a = "33.3 manzanas";
settype($a, "float");
var_dump($a);
# flotante(33)

$a = "manzanas 33";
$b = 10;
settype($a, "integer");
echo $a + $b;

/**
 * No confíes en settype() para efectuar operaciones aritméticas. Es preferible evitar su uso para estos casos.
 */


?>


<?="hello world";
//forma abrebiada de utilizar echo "hello world"; 
?>