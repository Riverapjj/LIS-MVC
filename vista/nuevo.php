<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">NUEVO</h1>
<form action="" method="get">
   
<input type="text" placeholder="INGRESE LA FRUTA" name="nombre" ><br>
<input type="text" placeholder="INGRESE EL PRECIO" name="precio" ><br>
<input type="submit" class="btn" name="btn" value="GUARDAR" ><br>
<input type="hidden" name="m" value="guardar">
</form>
<?php

require_once("layouts/footer.php");

