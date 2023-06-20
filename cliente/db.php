<?php
  $userr='root';
  $password='';
  $database='webactualizar';
  $host='localhost';
  $mysqli=new mysqli($host,$userr,$password,$database);
  if($mysqli->connect_errno)
   {
       echo "<h1> Error en la conexion a DB: </h1>".$mysqli->connect_error;
   }
   
?>