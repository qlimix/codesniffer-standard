<?php declare(strict_types=1);

namespace Expected;

final class Crement
{
    public function crementIt(int $int): int
    {
        $int--;
        --$int;

        $int++;
        ++$int;

        return $int;
    }
}
