<?php declare(strict_types=1);

namespace Expected;

final class ImportNative
{
    public function importFunction(): void
    {
        is_numeric('123');
    }

    public function importConstant(): void
    {
        PHP_VERSION;
    }

    public function importObject(): void
    {
        new \stdClass();
    }
}
