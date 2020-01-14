<?php declare(strict_types=1);

namespace Expected;

final class Operators
{
    public function equals(int $value): bool
    {
        return $value == 0;
    }

    public function notEqual(int $value): bool
    {
        return $value != 0;
    }
}
