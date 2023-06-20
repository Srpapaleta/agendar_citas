
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cita Virtual</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="save.php" method="POST" class="row g-3">
        <div class="col-6 form-floating">
            <input type="text" name="apellido1" id="apellido1Input" class="form-control" placeholder="Primer Apellido" required>
            <label for="apellido1Input" class="form-label">Primer Apellido</label>
        </div>
        <div class="col-6 form-floating">
        <input type="text" name="apellido2" id="apellido2Input" class="form-control" placeholder="Segundo Apellido" required>
        <label for="apellido2Input" class="form-label">Segundo Apellido</label>
        </div>
        <div class="col-6 form-floating">
        <input type="text" name="nombre1" id="nombre1Input" class="form-control" placeholder="Primer Nombre" required>
        <label for="nombre1Input" class="form-label">Primer Nombre</label>
        </div>
        <div class="col-6 form-floating">
            <input type="text" name="nombre2" id="nombre2Input" class="form-control" placeholder="Segundo Nombre">
            <label for="nombre2Input" class="form-label">Segundo Nombre</label>
        </div>
        <div class="col-6">
        <label for="TDInput" class="form-label">Tipo de Documento</label>
        <select name="TD" id="TDInput" class="form-select form-select-lg">
            <option value="0">---</option>
            <option value="DI">Tarjeta de Identidad</option>
            <option value="CC">Cedula de Ciudadania</option>
        </select>
        </div>
        <div class="col-6">
            <label for="idInput" class="form-label">Numero de Documento</label>
            <input type="text" name="id" id="idInput" class="form-control" required>
        </div>
        <div class="col-6 form-floating">
            <input type="text" name="telefono" id="telefonoInput" class="form-control" placeholder="Telefono" required>
            <label for="telefonoInput" class="form-label">Telefono</label>
        </div>
        <div class="col-6 form-floating">
            <input type="email" name="email" id="emailInput" placeholder="Correo Electronico" class="form-control" required>
            <label for="emailInput" class="form-label">Correo Electronico</label>
        </div>
        <div class="col-6">
            <label for="serviciosInput" class="form-label">Horarios</label>
            <select name="servicio" id="serviciosInput" class="form-select form-select-lg" required>
                <?php
                include("db.php");
                include("diacita.php");
                $valorCookie = $_COOKIE['fecha_cita'];
                $consulta = "SELECT id, horario FROM horarios WHERE fecha = '$valorCookie' and cupos != 0 ";
                $ejecutar = mysqli_query($mysqli, $consulta) or die(mysqli_error($mysqli));


                foreach ($ejecutar as $opciones) : 
                    ?>
                    <option value=' <?php echo $opciones['id'] ?>'>  <?php echo $opciones['horario'] ?> </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-6">
            <label for="asesorInput" class="form-label">Asesor</label>
            <select name="asesor" id="asesorInput" class="form-select form-select-lg">
                <option value="sinasesor">---</option>
                <option value="asesor1">asesor1</option>
                <option value="asesor2">asesor2</option>
                <option value="asesor3">asesor3</option>
                <option value="asesor4">asesor4</option>
            </select>
        </div>
        <div class="col-2">
            <input type="submit" value="Agendar" name="save" class="btn btn-success">
        </div>
        
    </form>
    </div>
</body>
</html>