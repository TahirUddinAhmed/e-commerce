<?php

/**
 * Get the base adddress
 * @param string $string
 * @return string
 */
function basePath($string) {
    return __DIR__ . '/' . $string;
}

/**
 * Views path
 * @param mixed $string
 * @return void
 */
function loadView($name) {
    $viewPath = basePath("includes/{$name}.php");
    if(file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "view {$viewPath} is not found";
    }
}