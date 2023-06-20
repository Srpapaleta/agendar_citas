<?php
    include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>horarios</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="crearhorarios.php" method="POST" class="row g-3">
            <div class="col-12">
                <label for="fechaInput" class="form-label">Fecha</label>
                <input type="date" name="fecha" class="form-control" id="fechaInput">
            </div>
            <div class="col-12">
                <label for="selectHorario">Horarios</label>
                <select name="horario" id="" class="form-select form-select-lg" id="selectHorario">
                    <option value="">---</option>
                    <option value="8-9 am">8-9 am</option>
                    <option value="9-10 am">9-10 am</option>
                    <option value="10-11 am">10-11 am</option>
                    <option value="11-12 am">11-12 am</option>
                    <option value="2-3 pm">2-3 pm</option>
                    <option value="3-4 pm">3-4 pm</option>
                    <option value="4-5 pm">4-5 pm</option>
                </select>
                </div>
                <div class="col-12">
                    <label for="cuposInput" class="form-label">Cupos</label>
                    <input type="text" name="cupos" class="form-control" id="cuposInput">
                </div>
                <div class="col-2">
                    <input type="submit" value="Registrar" name="done" class="btn btn-success">
            </div>
        </form>
    </div>
    
    
    
</body>
</html>