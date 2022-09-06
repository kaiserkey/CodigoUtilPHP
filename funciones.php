<?

// definimos una variable de ámbito global
$mi_variable_global = 10;
$mi_variable_global2 = 10;
// definimos una función que modificará la variable global
function modificar_variable_global(&$variable, $otro_parametro) {
$variable = $variable * $otro_parametro;
}
// llamamos a la función pasando como referencia la variable global
modificar_variable_global($mi_variable_global, 2);
// imprimimos la variable global
echo $mi_variable_global; // salida: 20

// definimos la función que hará referencia a la variable global
function modificar_variable_global2($otro_parametro) {
    global $mi_variable_global2;
    $mi_variable_global2 = $mi_variable_global2 * $otro_parametro;
    }
// llamamos a la función
modificar_variable_global2(2);
// imprimimos la variable global
echo $mi_variable_global2; // salida: 20

// Función que llamaré desde otra función
function decir_hola() {
    return "Hola Mundo!";
    }
    //call_user_func('nombre_de_la_funcion', $parametro1, $parametro2);
    //call_user_func_array('nombre_de_la_funcion', $array_con_argumentos);
    // Función que hará la llamada de retorno
    function llamar_a_otra($funcion) {
    echo call_user_func($funcion);
    echo chr(10);
    // continuación del algoritmo
}
llamar_a_otra('decir_hola');

// función callable
function callable_func_1($arg1, $arg2, $arg3) {
    $result = ($arg1 + $arg2) * $arg3;
    return $result;
}
// función que hará la llamada de retorno
function forma_1($funcion, $argumentos=array()) {
    $result = NULL;
if(is_callable($funcion)) {
    $result = call_user_func_array($funcion, $argumentos);
}
return $result;
}
// implemenatción
$args = array(10, 5, 2);
$resultado = forma_1('callable_func_1', $args);
echo $resultado;

// función que hará la llamada de retorno
function forma_2() {
$num_args = func_num_args();
$args = func_get_args();
$result = NULL;
// verifico que al menos se reciba 1 argumento
if($num_args >= 1) {
// obtengo el nombre de la función (asumo que es el 1er arg.)
$funcion = func_get_arg(0);
// elimino el nombre de la función de los argumentos
array_shift($args); // elimino el índice 0
// verifico que sea una función callable y la llamo
if(is_callable($funcion)) {
$result = call_user_func_array($funcion, $args);
}
}
return $result;
}
// implementación
$funcion = 'callable_func_1';
$arg1 = 10;
$arg2 = 5;
$arg3 = 2;
$resultado = forma_2($funcion, $arg1, $arg2, $arg3);
echo $resultado;

?>