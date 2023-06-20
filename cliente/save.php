<?php
    include('db.php');

    if(isset($_POST['save'])){

        $valorCookie = $_COOKIE['fecha_cita'];

        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $id = $_POST['id'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $horario = $_POST['servicio'];
        $asesor = $_POST['asesor'];

        $sql1 = "SELECT horario from horarios WHERE id = '$horario'";
        $result1 = mysqli_query($mysqli, $sql1);
        $row = mysqli_fetch_assoc($result1);
        $value = $row['horario'];


        $sql = "INSERT INTO datos(apellido1, apellido2, nombre1, nombre2, numerodocumento, telefono, email, fecha, horario, asesor) VALUES ('$apellido1', '$apellido2', '$nombre1', '$nombre2', '$id', '$telefono', '$email', '$valorCookie', '$value', '$asesor')";
        $result = mysqli_query($mysqli, $sql);
        echo $horario;
        echo $valorCookie;

        $sql2 = "UPDATE horarios SET cupos = cupos - 1 WHERE id = '$horario'";
        $result2 = mysqli_query($mysqli, $sql2);
        echo $horario;
        echo $valorCookie;
        if(!$result){
            die("Query Failed");
        }
        //header("Location: pregunta.php");
    }
?>