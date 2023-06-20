<?php
    include("db.php");

    if(isset($_POST['fecha'])){
        $fechaP = date('Y-m-d', strtotime($_POST['fecha']));
        $sqlP = "SELECT id, fecha FROM horarios WHERE fecha='$fechaP'";
        $resultP = mysqli_query($conn, $sqlP);
    }
    
?>