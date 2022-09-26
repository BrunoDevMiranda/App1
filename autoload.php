<?php

function __autoload($class_name)
{
    if(file_exists('Academia/' .$class_name. '.php')){
        require_once 'Academia/' . $class_name . '.php';

    }
}