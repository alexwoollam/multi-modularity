<?php

declare(strict_types=1);

namespace My\Plugin;


use Inpsyde\Modularity\Module\ExecutableModule;
use Psr\Container\ContainerInterface;

class Thing implements ExecutableModule
{

    public function run(ContainerInterface $container): bool
    {
        // This is now loaded.

        return true;
    }

    public function id(): string
    {
        return 'my-app-thing';
    }
}