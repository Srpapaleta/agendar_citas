<?php
    include('db.php');

    if(isset($_POST['done'])){
        $fecha = date('Y-m-d', strtotime($_POST['fecha']));
        $horario = $_POST['horario'];
        $cupos = $_POST['cupos'];
        $asesor = $_POST['asesor'];

        $sql = "INSERT INTO horarios(fecha, horario, cupos) VALUES ('$fecha', '$horario', '$cupos')";
        $result = mysqli_query($mysqli, $sql);
        if(!$result){
            die("Query Failed");
        }
        

        $sql2 = "INSERT INTO asesores(nombre) VALUES ('$asesor')";
        $result2 = mysqli_query($mysqli, $sql2);
        if(!$result2){
            die("Query Failed");
        }

        header("Location: horarios.php");
    }
?>