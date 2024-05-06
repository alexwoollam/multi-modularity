<?php

declare(strict_types=1);

namespace My\OtherPlugin;


use Inpsyde\Modularity\Module\ExecutableModule;
use Psr\Container\ContainerInterface;

class AlsoThing implements ExecutableModule
{

    public bool $thing;

    public function __construct(){
        $this->thing = true;
    }

    public function run(ContainerInterface $container): bool
    {
        if($container->has('Some.thing')) {
            $this->thing = $container->get('Some.thing');
            // $this->thing is now controlled by My\Plugin\AnotherService->'Some.thing';
        }

        return true;
    }

    public function id(): string
    {
        return 'my-app-also-thing';
    }
}