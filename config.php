<?php   
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    $autoload = function($class){      
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);
    
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','votacao');
?>