<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/classes/Validators/Validator.php');

class Validators_PhoneValid implements Validator {
    public function validate($subject) {
        $phonePatterns = array(
            "\([0-9]{3}\)[0-9]{3}-[0-9]{4}", //(000)000-0000
            "[0-9]{3}-[0-9]{3}-[0-9]{4}", //000-000-0000
            "[0-9]{10}", //0000000000
            "[0-9]{3} [0-9]{3} [0-9]{4}", //000 000 0000
            "\+1\([0-9]{3}\)[0-9]{3}-[0-9]{4}", //+1(000)000-0000
            "\+1\-[0-9]{3}-[0-9]{3}-[0-9]{4}", //+1-000-000-0000
            "\+1[0-9]{10}", //+10000000000
            "\+1 [0-9]{3} [0-9]{3} [0-9]{4}", //+1 000 000 0000
        );
        $phonePatternsImploded = implode("|",$phonePatterns);
        return preg_match("/^($phonePatternsImploded)$/", $subject) == 1;
    }
}
