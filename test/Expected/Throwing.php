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
            throw new Exception('throw it');
        } catch (Throwable $exception) {
            throw new Exception('rethrow!');
        }
    }
}
