<?php

/**
 * Plugin Name: My-App
 * Description: Stuff here.
 * Version: 0.0.1
 * Author: IDL; Alex
 * Author URI: https://example.com/
 * Plugin URI: https://example.com/
 * License: MIT
 * License URI: example.com
 * Text Domain: example-app
 * Domain Path: /
 */

namespace My{
    if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
        include dirname(__FILE__) . '/vendor/autoload.php';
    }

    use Inpsyde\Modularity\Properties\PluginProperties;
    use Inpsyde\Modularity\Package;

    function app(): Package
    {
        static $package;
        if (!$package){
            $properties = PluginProperties::new(__FILE__);
            $package = Package::new($properties);
        }
        return $package;
    }

    add_action(
        'init',
        static function(): void {
            app()->boot();
        }
    );
}
