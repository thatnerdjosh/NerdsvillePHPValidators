# NerdsvillePHPValidators

This is a basic set of validators I wrote in PHP. These are meant to be autoloaded when needed using one of the 
following methods:

1) Utilizing the Standard PHP Libraries Autoload Register functionality (Recommended)

    function class_autoloader($class) {
        $folderedClass = str_replace("_", "/", $class);
        $theClass = $_SERVER['DOCUMENT_ROOT'].'/classes/'.$folderedClass.'.php';
        if (file_exists($theClass) && include_once($theClass)) {
           return TRUE;
        }
        else {
            trigger_error("The class '$class' or the file '$theClass' failed to spl_autoload  ", E_USER_WARNING);
            return FALSE;
        }
    }

    if (is_array(spl_autoload_functions()) && in_array('__autoload', spl_autoload_functions())) {
         spl_autoload_register('__autoload');
     }

    spl_autoload_register('class_autoloader');
2) As done in the bootstrap.php of the tests (Not recommended as this would override any of your own autoloaders)

Feel free to make a PR and contribute :) If you like the repo, star it! :D
