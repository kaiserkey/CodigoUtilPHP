<?

$hostname = "mysql:dbname=pruebas2; host=localhost";
$usuario = "root";
$contrasena = "";

try{
    $con = new PDO($hostname, $usuario, $contrasena);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Se ha conectado a la base de datos. <br>";
    $sql = "SELECT * FROM alumnos";

    echo "Resultados: <br>";
    foreach($con->query($sql) as $rows){
        echo "<b>".$rows['id']."</b> <b>".$rows['nombre']."</b> <b>".$rows['apellido']."</b><br>";
    }
    $con = null;
}catch(PDOException $e){
    echo "ERROR: No se pudo conectar a la base de datos: " . $e->getMessage();
}