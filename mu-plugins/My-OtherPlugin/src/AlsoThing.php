<?php

declare(strict_types=1);

namespace My\OtherPlugin;


use Inpsyde\Modularity\Module\ExecutableModule;
use Psr\Container\ContainerInterface;

class AlsoThing implements ExecutableModule
{

    public function run(ContainerInterface $container): bool
    {
        // This is now also loaded.

        return true;
    }

    public function id(): string
    {
        return 'my-app-also-thing';
    }
}