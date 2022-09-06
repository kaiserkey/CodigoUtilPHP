<?

//iterable solo funciona con valores que puedan ser iterados como un array
$arreglo = array(1,2,3,4,5,6,7,8,9,10);
function foo(iterable $iterable) {
    foreach ($iterable as $valor) {
        echo "<br>".$valor;
    } 
}

foo($arreglo);

?>