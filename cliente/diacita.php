<?php
    include('db.php');

    if(isset($_POST['cita'])){
        $fechacita = date('Y-m-d', strtotime($_POST['fechacita']));
        $fecha_actual = date('Y-m-d');
        if($fecha_actual != $fechacita && $fecha_actual < $fechacita){
                $sqlC = "SELECT id, fecha FROM horarios WHERE fecha = '$fechacita' and cupos != 0";
            $result = mysqli_query($mysqli, $sqlC);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $value = $row['id'];
                setcookie('fecha_cita', $row['fecha'], time() + 3600, '/');
                header("Location: index.php");

            } else {
                echo "No hay cita para esta fecha";
            }
        }
        else{
            echo "No se puede agendar una cita para el dia anterior o el mismo dia";
        }


        // if(empty($result)){
        //     die("Query failed");
        // }
        // else{
        //     header("Location: index.php");
        // }
         
    }
