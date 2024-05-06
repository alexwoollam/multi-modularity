<?php

declare(strict_types=1);

namespace My\Plugin;

use Inpsyde\Modularity\Module\ServiceModule;

class AnotherService implements ServiceModule
{
    public function id(): string
    {
        return '';
    }

    public function services(): array
    {
        return [
            'Some.thing' => static function (): bool {
                return false;
            },
        ];
    }
}