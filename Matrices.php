<?

#Arreglo numerico indexado
$nombre = "Aner"; 
$array = array(1, 2, 3, "casa", $nombre);

//saco el numero de elementos
$longitud = count($array);

//Recorro todos los elementos
for($i=0; $i<$longitud; $i++){
    //saco el valor de cada elemento
    echo $array[$i];
	echo "<br>";
}

#Arreglo asociativo
$equipo = array('portero'=>'Cech', 'defensa'=>'Terry', 'medio'=>'Lampard', 'delantero'=>'Torres');

foreach($equipo as $posicion=>$jugador){
	echo "El " . $posicion . " es " . $jugador;
	echo "<br>";
}

#Array multidimensional
$equipo_futbol = array
(   
    'Equipo 1: '=> array("Rooney","Chicharito","Gigs"),
    'Equipo 2: '=> array("Suarez"),
    'Equipo 3: '=> array("Torres","Terry","Etoo")
);

foreach($equipo_futbol as $equipo => $nombre_equipo){
    echo "En el equipo: $equipo juegan: ";
    foreach($nombre_equipo as $jugador => $nombre_jugador){
        echo $nombre_jugador ." ";
    }
echo "<br>";
}

$equipo_futbol = array
(   
    array("Rooney","Chicharito","Gigs"),
    array("Suarez"),
    array("Torres","Terry","Etoo")
);

foreach($equipo_futbol as $equipo){
    echo "En el equipo juegan: ";
    foreach($equipo as $jugador){
        echo $jugador ." ";
    }
echo "<br>";
}

#Matriz con PHP y HTML 

$matriz = array(
    array(1,2,3,4,5),
    array(6,7,8,9,10),
    array(11,12,13,14,15),
    array(16,17,18,19,20),
    array(21,22,23,24,25),
);
echo "<br>";
echo "<table style='background-color:green; border: black 4px solid'>";
foreach($matriz as $filas){
    echo "<tr >";
    foreach($filas as $datos){
        echo "<td style='border: black 1px solid'> $datos </td>";
    }
    echo "</tr>";
}
echo "</table>";




?>