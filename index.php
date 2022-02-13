<?php

require_once("config.php");
require_once("controlador/index.php");
if(isset($_GET['m'])):

    if(method_exists("modelocontroller",$_GET['m'])):
    modelocontroller::{$_GET['m']}();
    endif;
else:
modelocontroller::index();
endif;
