<?php

declare(strict_types=1);

/**
 * Plugin Name: My-Plugin
 * Description: Does a thing.
 * Version: 0.0.1
 * Author: IDL; Alex
 * Author URI: https://example.com/
 * Plugin URI: https://example.com/
 * License: MIT
 * License URI: example.com
 * Text Domain: example-app
 * Domain Path: /
 */

use Inpsyde\Modularity\Package as ModulePackage;
use My\Plugin\AnotherService;
use My\Plugin\Thing;

if ( is_readable(__DIR__.'/vendor/autoload.php') ) {
    require_once __DIR__.'/vendor/autoload.php';
}

add_action(
    \My\app()->hookName(ModulePackage::ACTION_INIT),
    function (ModulePackage $plugin): void {
        $plugin->addModule(new Thing);
        $plugin->addModule(new AnotherService);
    });




