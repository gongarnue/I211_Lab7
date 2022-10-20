<?php
    function camelCaseToUnderscore($class){
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $class));
    }
    
    spl_autoload_register(function ($class) {
        include_once 'classes/' . camelCaseToUnderscore($class) . '.class.php';
    });