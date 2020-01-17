<?php declare(strict_types=1);

namespace Expected;

use Exception;
use Throwable;

final class Throwing
{
    /**
     * @throws Exception
     */
    public function throwMe(): void
    {
        try {
        } catch (Throwable $exception) {
        }
    }
}
