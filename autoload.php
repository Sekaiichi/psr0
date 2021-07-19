<?php

spl_autoload_register(function ($class){
    var_dump( 'src/' . $class . '.php');
    include 'src/' . $class . '.php';
});
