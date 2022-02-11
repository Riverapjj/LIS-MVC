<?php

    require_once("models/equipos_model.php");

    $equipos = new Equipos();
    $data = $equipos->getEquipos();

    require_once("views/equipos_view.php");


?>