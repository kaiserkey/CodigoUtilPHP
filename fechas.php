<?

    class HorariosDeAtencion{
        private $horaInicio;
        private $horaFin;
        private $fechaInicio;
        private $fechaFin;
        private $intervalosAtencion;
        private $segunDias;
        private $formatoFechaHora;
        private $dia;
        private $matriculaDoctor;
        private $tipoDeOperacion;


        public function __construct($horaInicio, $horaFin, $fechaInicio, 
                                    $fechaFin, $intervalosAtencion, 
                                    $segunDias, $formatoFechaHora)
        {
            $this->horaInicio = date($horaInicio);
            $this->horaFin = date($horaFin);
            $this->fechaInicio = date($fechaInicio);
            $this->fechaFin = date($fechaFin);
            $this->intervalosAtencion = $intervalosAtencion;
            $this->segunDias = strtolower($segunDias);
            $this->formatoFechaHora = $formatoFechaHora;
            $this->retornarES_EN($segunDias);
        }

        public function getHoraInicio(){return $this->horaInicio;}
        public function setHoraInicio($horaInicio){$this->horaInicio = $horaInicio;return $this;}
        public function getHoraFin(){return $this->horaFin;}
        public function setHoraFin($horaFin){$this->horaFin = $horaFin;return $this;}
        public function getFechaInicio(){return $this->fechaInicio;}
        public function setFechaInicio($fechaInicio){$this->fechaInicio = $fechaInicio;return $this;}
        public function getFechaFin(){return $this->fechaFin;}
        public function setFechaFin($fechaFin){$this->fechaFin = $fechaFin;return $this;}
        public function getIntervalosAtencion(){return $this->intervalosAtencion;}
        public function setIntervalosAtencion($intervalosAtencion){$this->intervalosAtencion = $intervalosAtencion;return $this;}
        public function getSegunDias(){return $this->segunDias;}
        public function setSegunDias($segunDias){$this->segunDias = $segunDias;return $this;}
        public function getFormatoFechaHora(){return $this->formatoFechaHora;}
        public function setFormatoFechaHora($formatoFechaHora){$this->formatoFechaHora = $formatoFechaHora;return $this;}
        public function getDia(){return $this->dia;}
        public function setDia($dia){$this->dia = $dia;return $this;}

        public function retornarES_EN($dia){
            switch($dia){
                case 'lunes':
                    $this->setDia('Monday');
                    break;
                case 'martes':
                    $this->setDia('Tuesday');
                    break;
                case 'miercoles':
                    $this->setDia('Wednesday');
                    break;
                case 'jueves':
                    $this->setDia('Thursday');
                    break;
                case 'viernes':
                    $this->setDia('Friday');
                    break;
                case 'sabado':
                    $this->setDia('Saturday');
                    break;
                case 'domingo':
                    $this->setDia('Sunday');
                    break;
            }
        }
    
        public function retornarEN_ES($dia){
            switch($dia){
                case 'Monday':
                    return 'lunes';
                    break;
                case 'Tuesday':
                    return 'martes';
                    break;
                case 'Wednesday':
                    return 'miercoles';
                    break;
                case 'Thursday':
                    return 'jueves';
                    break;
                case 'Friday':
                    return 'viernes';
                    break;
                case 'Saturday':
                    return 'sabado';
                    break;
                case 'Sunday':
                    return 'domingo';
                    break;
            }
        }
        
}

    #Manejo de fechas en php
    //horarios de atencion 1
    $horaInicio1 = '07:00:00';
    $horaFin1 = '12:00:00';
    $fechaInicialBD1 = '2022-01-01 07:00:00';//fecha en bbdd
    $fechaFinalBD1 = '2022-01-08 12:00:00';//fecha en bbdd
    $intervalo1 = 40;
    $dia1 = "martes";
    $formato1 = 'd/m/Y H:i:s';
    $nombreDoctorProcedimiento1 = 'Dr. Gauna Anibal';//nombre del doctor o del procedimiento para el turno
    $tipoDeOperacion1 = 'Consulta Medica';//consulta medica o procedimiento

    //objeto horario atencion 1
    $horasDeAtencion1 = new HorariosDeAtencion($horaInicio1, $horaFin1, 
                                                $fechaInicialBD1, $fechaFinalBD1, $intervalo1, 
                                                $dia1, $formato1);
    
    //horarios de atencion 2
    $horaInicio2 = '14:00:00';
    $horaFin2 = '21:00:00';
    $fechaInicialBD2 = '2022-01-01 07:00:00';//fecha en bbdd
    $fechaFinalBD2 = '2022-01-08 12:00:00';//fecha en bbdd
    $intervalo2 = 40;
    $dia2 = "jueves";
    $formato2 = 'd/m/Y H:i:s';
    $nombreDoctorProcedimiento2 = 'Dr. Cupaiouolo Carlos';//nombre del doctor o del procedimiento para el turno
    $tipoDeOperacion2 = 'Consulta Medica';//consulta medica o procedimiento
    //objeto horario atencion 2
    $horasDeAtencion2 = new HorariosDeAtencion($horaInicio2, $horaFin2, 
                                            $fechaInicialBD2, $fechaFinalBD2, 
                                            $intervalo2, $dia2, $formato2);

    $arregloDeFechas[0] =  $horasDeAtencion1;
    $arregloDeFechas[1] = $horasDeAtencion2;

    

    $fechas1 = getFechaIntervalos($horasDeAtencion1->getFechaInicio(), $horasDeAtencion1->getFechaFin(), 
                                $horasDeAtencion1->getFormatoFechaHora(), $horasDeAtencion1->getIntervalosAtencion(), 
                                $horasDeAtencion1->getDia(), $horasDeAtencion1->getHoraInicio(), 
                                $horasDeAtencion1->getHoraFin());

    $fechas2 = getFechaIntervalos($horasDeAtencion2->getFechaInicio(), $horasDeAtencion2->getFechaFin(), 
                                $horasDeAtencion2->getFormatoFechaHora(), $horasDeAtencion2->getIntervalosAtencion(), 
                                $horasDeAtencion2->getDia(), $horasDeAtencion2->getHoraInicio(), 
                                $horasDeAtencion2->getHoraFin());


    $arregloInterFech = [];

    for($i=0; $i<count($arregloDeFechas); $i++){
        $arregloInterFech[$i] = getFechaIntervalos($arregloDeFechas[$i]->getFechaInicio(), $arregloDeFechas[$i]->getFechaFin(), 
        $arregloDeFechas[$i]->getFormatoFechaHora(), $arregloDeFechas[$i]->getIntervalosAtencion(), 
        $arregloDeFechas[$i]->getDia(), $arregloDeFechas[$i]->getHoraInicio(), 
        $arregloDeFechas[$i]->getHoraFin());
    }

    

    function arregloDeFechas($arregloDeIntervalosDeFecha = array()){
        $fechas = [];

        foreach($arregloDeIntervalosDeFecha as $datos=>$fecha){
            foreach($fecha as $datetime){
                $fechas[]=$datetime->format('d/m/Y');
            }
        }

        return $fechas;
    }

    function arregloDeHoras($arregloDeIntervalosDeFecha = array()){
        $horas = [];

        foreach($arregloDeIntervalosDeFecha as $datos=>$fechas){
            foreach($fechas as $datetime){
                $horas[] = $datetime->format("H:i:s:A");
            }
        }

        return $horas;
    }


    function arregloDeFechasHoras($arregloDeIntervalosDeFecha = array()){
        $fechas = [];

        foreach($arregloDeIntervalosDeFecha as $datos=>$fecha){
            foreach($fecha as $datetime){
                $fechas[]=$datetime->format('d/m/Y H:i:s:A');
            }
        }

        return $fechas;
    }

    //funcion que dado un arreglo de fechas horas elimine del array los datos que estan en otro array con los turnos


    function getFechaIntervalos($fechaInicio, $fechaFinal, $formato, $intervalo=0, $dia = '', $horaInicio, $horaFin) {
        //necesito ingresar el nombre del doctor y un arreglo con los turnos que ya estan sacados
        //comparar el nombre del doctor que tiene reservas con el que se vana  mostrar las reservas
        //eliminar las reservas que corresponden a mismo doctor y estan activas
        //PROBAR CON ARRAY DIF
        $fechaInicio = DateTime::createFromFormat($formato, date_format(new DateTime($fechaInicio), $formato), new DateTimeZone('America/Argentina/San_Luis'));
        $fechaFin = DateTime::createFromFormat($formato, date_format(new DateTime($fechaFinal), $formato), new DateTimeZone('America/Argentina/San_Luis'));
        
        $intervalo = DateInterval::createFromDateString("$intervalo minutes");
        
        $periodo = new DatePeriod(
            $fechaInicio,
            $intervalo,
            $fechaFin
        );


        //'H:i:A'

        $range = array();
        foreach ($periodo as $date) {
            if($date->format('l') === $dia){
                if($date->format('H:i:s') >= date($horaInicio)){
                    if($date->format('H:i:s') < date($horaFin)){
                        array_push($range, $date);
                    }
                }
            }
        }

        //$fechaDeFin = new DateTime($fechaFinal);
        // if($fechaDeFin->format('l') === $dia){
        //     $range[] = $fechaDeFin->format($formato);
        // }
        
        return $range; //regresamos un objeto de tipo datetime
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas PHP</title>
</head>
<body>
    <table>
        <tr>
        <th>Fecha Del Turno</td>
        <th>Hora Del Turno</th>
        <th></th>
        </tr>
        <tr>
            <td>
                <select name='fechaturno' id='fechaturno'>
                    <?
                        foreach(arregloDeFechas($arregloInterFech) as $datos=>$fechas){
                                echo "<option value='" . $fechas . "'>" . $fechas . "</option>";
                        }
                    ?>
                </select>
            </td>
            <td>
                <select name='horaturno' id='horaturno'>
                    <?
                        foreach(arregloDeHoras($arregloInterFech) as $datos=>$horas){
                            echo "<option value='" . $horas . "'>" . $horas;
                        }
                    ?>
                </select>
            </td>
            <td>
            <td><input type="button" value="Reservar"></td>
            </td>
        </tr>
    </table>
    <div id="fechas">
            <?
                foreach(arregloDeFechasHoras($arregloInterFech) as $datos=>$fechaHora){
                    echo $fechaHora . '<br>';
                }
            ?>
    </div>
    <script>
            //ajax request

    </script>
</body>
</html>