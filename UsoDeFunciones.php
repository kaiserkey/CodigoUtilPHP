<?

function calleable_function($function, $arg=array()){
    $result=NULL;
    if(is_callable($function)){
        $result = call_user_func_array($function, $arg);
    }else{
        echo "La funcion no es calleable.";
    }
    return $result;
}

function calculadora($num1, $num2, $op){
    $result=NULL;
    switch($op){
        case($op=="suma"): 
            $result= $num1+$num2;
            break;
        case($op=="resta"):
            $result=$num1-$num2;
            break;
        case($op=="multiplicacion"):
            $result=$num1*$num2;
            break;
        default:
            echo "Operacion Incorrecta.";
    }
    return $result;
}

$arg1 = array(10, 10, "suma");
$arg2 = array(10, 10, "resta");
$arg3 = array(10, 10, "multiplicacion");

$resultado = calleable_function('calculadora', $arg3);

echo $resultado;

?>

