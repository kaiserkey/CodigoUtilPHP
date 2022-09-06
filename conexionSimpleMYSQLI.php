<?

$con = new mysqli("localhost", "root", "", "pruebas2");

if($con->connect_error){
    die("Errror: No es posible conectarse al servidor: " . $con->connect_error);
}else{
    echo "Conectando a la BD...";
    echo "<br>";
    echo "Conexion Exitosa...";
    echo "<br>";

    $result = $con->query("SELECT * FROM alumnos");

    echo "Numero de resultados: $result->num_rows";

}

$result->close();
$con->close();

