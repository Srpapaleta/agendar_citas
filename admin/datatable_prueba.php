<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <!-- boostrap -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- para exportar -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Listado de propietarios</title>
</head>
<body>
    <div class="container">
        <form action="consulta.php" method="POST" class="row g-3">
            <label for="" class="form-label">¿Que dias desea consulta?</label>
            <div class="col-6">
                <label for="diaconsultaInput" class="form-label">Fecha inicial</label>
                <input type="date" name="diaconsulta" id="diaconsultaInput" class="form-control" required>
            </div>
            <div class="col-6">
                <label for="diaconsulta2Input" class="form-label">Fecha final</label>
                <input type="date" name="diaconsulta2" id="diaconsulta2Input" class="form-control" required>
            </div>
            <div class="col-2">
                <input type="submit" value="Citas Por Dia" name="consulta" class="btn btn-success">
            </div>
            
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('#ListarFechas').DataTable({
                dom: 'Bfrtilp',
                buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="bi bi-file-earmark-spreadsheet-fill"></i>',
                    title: 'Citas',
                    className: 'btn btn-success'
                }, 
                ],
                language: {
                    "decimal": ",",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });
    </script>
    <?php include('db.php'); ?>
    <br><br>
    <div class="container">
    <table id="ListarFechas" class="table table-striped" style="width:90%">
        <thead>
            <tr>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Numero de Documento</th>
                <th>telefono</th>
                <th>Email</th>
                <th>Fecha</th>
                <th>Horario</th>
                <th>Asesor</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // generar dinamicamente los datos de la tabla
            include("consulta.php");
            if(!empty($_COOKIE['diaconsulta']) or !empty($_COOKIE['diaconsulta2'])){
                $valorCookie = $_COOKIE['diaconsulta'];
                $valorCookie2 = $_COOKIE['diaconsulta2'];
            }
            else{
                $valorCookie = date('Y-m-d');
                $valorCookie2 = date('Y-m-d');
            }
            
            $sql = "SELECT apellido1, apellido2, nombre1, nombre2, numerodocumento, telefono, email, fecha, horario, asesor FROM datos WHERE fecha BETWEEN '$valorCookie' AND '$valorCookie2';";
            $result = $mysqli->query($sql); //realiza la consulta en la DB
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['apellido1'] ?></td>
                    <td><?php echo $row['apellido2'] ?></td>
                    <td><?php echo $row['nombre1'] ?></td>
                    <td><?php echo $row['nombre2'] ?></td>
                    <td><?php echo $row['numerodocumento'] ?></td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['fecha'] ?></td>
                    <td><?php echo $row['horario'] ?></td>
                    <td><?php echo $row['asesor'] ?></td>
                    <td>
                        <!-- <button type="button" class="btn btn-info" onclick="OpenModal();">
                            <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:24px"></i>
                        </button>
                        <a href="eliminar.php?id=" title="Eliminar">
                            <button type="button" class="btn btn-danger">
                                <i class="fa fa-trash-o" aria-hidden="true" style="font-size:24px"></i>
                            </button>
                        </a> -->
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>