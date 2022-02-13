<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
    <link rel="stylesheet" type="text/css" href="views/assets/css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
</head>
<body>
    <?php
       // session_start();
    ?>
<div class="container">
    <h1 class="page-header text-center">Calculadora de CUM</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal" data-bs-target="#addnew"><span class="glyphicon glyphicon-plus"></span> Agregar materia</a>
            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Nombe del equipo</th>
                    <th>Liga</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    
                        foreach ($data as $equipo) {
                            
                    ?>

                        <tr>
                            <td><?= $equipo['nombreEquipo'];?></td>
                            <td><?= $equipo['nombreLiga'];?></td>
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
<?php include('views/nuevo_equipo.php'); ?>
<script src="views/assets/js/jquery.min.js"></script>
<script src="views/assets/js/bootstrap.min.js"></script>
</body>
</html>