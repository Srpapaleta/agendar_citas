<?php
    include('db.php');

    if(isset($_POST['consulta'])){
        $diaconsulta = $_POST['diaconsulta'];
        $diaconsulta2 = $_POST['diaconsulta2'];
        
        setcookie('diaconsulta', $diaconsulta, time() + 3600);
        setcookie('diaconsulta2', $diaconsulta2, time() + 3600);
        
        
        header("Location: datatable_prueba.php");
    }
?>