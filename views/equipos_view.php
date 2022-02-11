<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Equipos de fútbol</title>
    </head>
    <body>
        
        <?php
            foreach ($data as $equipo) {
                echo $equipo["nombreEquipo"]."<br/>";
            }
        ?>
    </body>
</html>