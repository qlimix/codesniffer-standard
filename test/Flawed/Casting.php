<?php declare(strict_types=1);

namespace Expected;

final class Casting
{
    public function cast(int $value): float
    {
        return (float)$value;
    }
}
