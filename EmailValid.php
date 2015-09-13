<?php
include_once("NerdsvillePHPValidator.php");

class NerdsvillePHPValidators_EmailValid implements NerdsvillePHPValidator {
    public function validate($subject) {
        $pattern = "/^.*@[A-z0-9]*\.*/";
        if(strpos($subject, "@") !== false) {
            $domain = explode("@", $subject)[1];
            return preg_match($pattern, $subject) && checkdnsrr($domain, "MX");  
        }    

        return false;
    }
}
