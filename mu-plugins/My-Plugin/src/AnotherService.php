<?php

declare(strict_types=1);

namespace My\Plugin;

use Inpsyde\Modularity\Module\ServiceModule;

class AnotherService implements ServiceModule
{
    public function id(): string
    {
        return 'my-app-plugin-services';
    }

    public function services(): array
    {
        return [
            'Some.thing' => static function (): bool {
                return false;
            },
            'Some.newThing' => static function (string $test): bool {
                if('test' === $test){
                    return true;
                }
                return false;
            },
        ];
    }
}