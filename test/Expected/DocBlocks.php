<?php declare(strict_types=1);

namespace Expected;

use Exception;
use Iterator;
use IteratorAggregate;
use function count;
use function is_numeric;

final class DocBlocks
{
    /**
     * @throws Exception
     */
    public function throwBlock(): void
    {
        throw new Exception('Throw me');
    }

    /**
     * @param string[] $items
     *
     * @return string[]
     */
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

    /**
     * @param string[] $items
     *
     * @return string[]
     */
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

    /**
     * @param string[] $items
     *
     * @return string[]
     */
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

    /**
     * @param string[] $items
     *
     * @return string[]
     */
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

    /**
     * @param string[] $items
     *
     * @return string[]
     *
     * @throws Exception
     */
    public function align(array $items): array
    {
        if (count($items) > 0) {
            throw new Exception('Empty!');
        }

        return $items;
    }
}
