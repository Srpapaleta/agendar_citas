<?php 
    include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pregunta</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="diacita.php" method="POST" class="row g-3">
            <div class="col-12">
            <label for="fechacitaInput" class="form-label">¿Que dia desea la Cita?</label>
            <input type="date" name="fechacita" id="fechacitaInput" class="form-control">
            </div>
            <div class="col-2">
                <input type="submit" value="Agendar" name="cita" class="btn btn-success">
            </div>
        </form>
    </div>
</body>
</html>