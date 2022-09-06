<? 
//Pasaje por referencia en una funcion
function sumar_uno(&$x) {
    $x++;
    echo $x;
}

$a = 2;

sumar_uno($a); // 3

// $a se pasó por referencia a suma_uno()
// El cambio dentro de la función
// se refleja en la referencia original
echo $a; // 3

//pasaje por referencia en la llamada de una funcion
//sumar_uno(&$a);

//Devolver y asignar por referencia
function &sumar() {
    static $x = 1;
    $x++;
    return $x;
}

// Asignación por referencia
$x = &sumar();

echo $x; // 2

sumar();
sumar();

echo $x; // 4


?>