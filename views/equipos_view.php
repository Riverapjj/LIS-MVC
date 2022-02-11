<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Equipos de fútbol</title>
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center">Equipos de fútbol</h1>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarEquipo">Agregar equipo</button>

                <table class="table table-bordered table-striped" style="margin-top:20px;">
                    <thead>
                        <th>Equipo</th>
                        <th>Liga</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($data as $equipo) {
                       
                        ?>
                        <tr>
                            <td><?=$equipo['nombreEquipo']?></td>
                            <td><?=$equipo['nombreLiga']?></td>
                            <td>
                                <a href="#update_<?php echo $equipo['idEquipo']; ?>" data-toggle="modal" class="btn btn-success">Editar</a>
                                <a href="#delete_<?php echo $equipo['idEquipo']; ?>" data-toggle="modal" class="btn btn-danger">Borrar</a>
                            </td>
                        </tr>

                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include('nuevo_equipo.php')?>
</body>
</html>