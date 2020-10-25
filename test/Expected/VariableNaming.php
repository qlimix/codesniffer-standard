<?php declare(strict_types=1);

namespace Expected;

final class VariableNaming
{
    private int $fooBar;

    private int $fooBarVeryLong;

    public function getFooBar(): int
    {
        return $this->fooBar;
    }

    public function getFooBarVeryLong(): int
    {
        return $this->fooBarVeryLong;
    }
}
