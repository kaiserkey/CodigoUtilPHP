<?

#array(clave => valor, );
$nombres_propios = array('Ana', 'Julia', 'Luisa', 'Alberto', 'Cecilia','Carlos',);
#foreach($array as $valor_del_elemento)
foreach($nombres_propios as $nombre) {
    echo $nombre . "<br>";
}


$datos_de_juan = array('Apellido' => 'Pérez',
                        'Fecha de nacimiento' => '23-11-1970',
                        'Teléfonos' => array('Casa' => '4310-9030',
                        'Móvil' => '15 4017-2530',
                        'Trabajo' => '4604-9000'),
                        'Casado' => True,
                        'Pasaporte' => False,
                        );
#foreach($array as $clave => $valor)
foreach($datos_de_juan as $titulo => &$dato) {
    if(!is_array($dato)) {
        if($dato === True) {
        $dato = 'SI';
    } else if ($dato === False) {
        $dato = 'NO';
    }
    echo "{$titulo}: {$dato}" . "<br>";
    } else {
        foreach($dato as $tipo_telefono => $numero) {
        echo "Teléfono {$tipo_telefono}: {$numero}" . "<br>";
    }
    }
}

print_r($datos_de_juan);

/**
 * La función is_array($array) nos permite evaluar una
 * variable y conocer si su tipo es "array". Devuelve TRUE si
 * efectivamente es un array y FALSE en caso contrario.
 */

?>