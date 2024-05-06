<?php

namespace My {

    if(file_exists(__DIR__ . '/My-App/Package.php')){
        require_once __DIR__ . '/My-App/Package.php';
    }

    if (! function_exists('My\app')) {
        return;
    }

    foreach (glob(__DIR__ . '/My-*/Package.php') as $file) {
        require_once $file;
    }
}
