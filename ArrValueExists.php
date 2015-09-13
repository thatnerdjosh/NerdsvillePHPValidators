<?php
include_once("NerdsvilleArrValueValidator.php");

class Validators_ArrValueExists implements NerdsvilleArrValueValidator {
    public function validate($arr, $index){
        return isset($arr[$index]) && !empty($arr[$index]);
    }
}
