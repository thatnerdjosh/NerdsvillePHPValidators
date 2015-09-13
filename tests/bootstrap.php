<?php

function __autoload($classname) {
    $classname = str_replace("Validators_", "", $classname);
    include_once(__DIR__."/../$classname.php");
}
