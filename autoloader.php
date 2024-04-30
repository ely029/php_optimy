<?php

spl_autoload_register(function ($class) {
    // Convert class name to file path
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $filePath = __DIR__ . DIRECTORY_SEPARATOR . $classPath . '.php';

    // Check if file exists and require it
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});
