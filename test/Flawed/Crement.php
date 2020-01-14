<?php declare(strict_types=1);

namespace Expected;

final class Crement
{
    public function crementIt(int $int): void
    {
        $int --;
        -- $int;

        $int ++;
        ++ $int;
    }
}
