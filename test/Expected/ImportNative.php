<?php declare(strict_types=1);

namespace Expected;

use stdClass;
use function is_numeric;
use const PHP_VERSION;

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
        new stdClass();
    }
}
