<?php
require_once "../../classes/Validators/ArrValueExists.php";

class ArrValueExistsTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
        $this->validator = new Validators_ArrValueExists();
    }
    
    public function testEmptyValue() {
        $arr = array("");
        $this->assertEquals(0, $this->validator->validate($arr, 0));
    }

    public function testValidValue() {
        $arr = array("Exists");
        $this->assertEquals(1, $this->validator->validate($arr, 0));
    }
}
