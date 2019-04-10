<?php

class Autoload{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(function($class) {
            require '_classes/' . $class . '.php';
        });
    }

}