<?php

function loadlibraries($class){
    $path = __DIR__."/lib";
    require once $path.$class.".php";
}

spl_autoload_register("loadLibraries");