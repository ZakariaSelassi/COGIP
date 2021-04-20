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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>