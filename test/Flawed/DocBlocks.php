<?php declare(strict_types=1);

namespace Expected;

use Exception;
use Iterator;
use IteratorAggregate;
use function count;
use function is_numeric;

final class DocBlocks
{
    public function throwBlock(): void
    {
        throw new Exception('Throw me');
    }

    public function arrayBlock(array $items): array
    {
        $numeric = [];
        foreach ($items as $string) {
            if (is_numeric($string)) {
                continue;
            }

            $numeric[] = $string;
        }

        return $numeric;
    }

    public function iteratorBlock(Iterator $items): array
    {
        $numeric = [];
        foreach ($items as $string) {
            if (is_numeric($string)) {
                continue;
            }

            $numeric[] = $string;
        }

        return $numeric;
    }

    public function iteratorAggregateBlock(IteratorAggregate $items): array
    {
        $numeric = [];
        foreach ($items as $string) {
            if (is_numeric($string)) {
                continue;
            }

            $numeric[] = $string;
        }

        return $numeric;
    }

    public function iterableBlock(iterable $items): array
    {
        $numeric = [];
        foreach ($items as $string) {
            if (is_numeric($string)) {
                continue;
            }

            $numeric[] = $string;
        }

        return $numeric;
    }

    public function align(array $items): array
    {
        if (count($items) > 0) {
            throw new Exception('Empty!');
        }

        return $items;
    }
}
