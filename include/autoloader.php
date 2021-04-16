<?php
spl_autoload_register('autoloadercontroller');
spl_autoload_register('autoloadermodel');

function autoloadercontroller($classname){
    $path = "controllers/";
    $extension = ".php";
    $fullpath = $path . $classname .$extension;
    include_once $fullpath; 
}
function autoloadermodel($classname){
    $path = "model/";
    $extension = ".php";
    $fullpath = $path . $classname .$extension;
    include_once $fullpath; 
}