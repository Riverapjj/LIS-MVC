<?php

    function isEmpty($var) {
        return empty(trim($var));
    }

    function isString($var) {
        return preg_match('/^[a-zA-Z ]+$/', $var);
    }

    function isDecimal($var) {
        return preg_match('/^[1-9]\d*(\.\d+)?$/', $var);
    }
?>