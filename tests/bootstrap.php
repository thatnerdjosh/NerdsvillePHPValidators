<?php

function __autoload($classname) {
    $classname = str_replace("NerdsvilleValidators_", "", $classname);
    include_once(__DIR__."/../$classname.php");
}
