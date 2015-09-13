<?php

require_once 'bootstrap.php';

class PhoneValidTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
        $this->validator = new Validators_PhoneValid();
    }

    public function testEmptyValue() {
        $this->assertEquals(0, $this->validator->validate(""));
    }

    public function testValidPhoneTypes() {
        $formats = array(
            "9999999999",
            "999-999-9999",
            "(999)999-9999",
            "999 999 9999",
            "+19999999999",
            "+1(999)999-9999",
            "+1 999 999 9999",
            "+1-999-999-9999",
        );
        foreach($formats as $format) {
            $this->assertEquals(1, $this->validator->validate($format));
        }
    }

    public function testNonUSPhoneNumber() {
        $this->assertEquals(0, $this->validator->validate("+29999999999"));
    }

    public function testInvalidPhoneNumber() {
        $this->assertEquals(0, $this->validator->validate("999999999"));
    }
}
