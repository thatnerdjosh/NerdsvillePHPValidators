<?php

require_once 'bootstrap.php';

class EmailValidTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
        $this->validator = new NerdsvilleValidators_EmailValid();
    }

    public function testEmptyValue() {
        $this->assertEquals(0, $this->validator->validate(""));
    }

    public function testValidEmails() {
        $emails = array(
            "nerdsville@nerdsville.net",
            "testtest@nerdsville.net",
            "test+test@nerdsville.net",
            "test123@nerdsville.net"
        );

        foreach($emails as $email) {
            $this->assertEquals(1, $this->validator->validate($email));
        }
    }
   
    public function testInvalidEmails() {
        $emails = array(
            "test@example.com",
            "test@nerds.ofasdoihpisdafosda",
            "test",
            "test.test@testtest"
        );

        foreach($emails as $email) {
            $this->assertEquals(0, $this->validator->validate($email));
        }
    }
}
