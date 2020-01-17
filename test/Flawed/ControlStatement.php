<?php declare(strict_types=1);

namespace Expected;

use Exception;
use function is_numeric;

final class ControlStatement
{
    public function example(string $value): bool
    {
        return is_numeric($value);
    }

    /**
     * @throws Exception
     */
    public function throwingMethod(bool $bool): bool
    {
        if(!$bool)
            return $bool;

        throw new Exception('example');
    }

    public function switchingMethod(int $value): int
    {
        switch($value){
            case 1:
            case 2:
                return 2;
            case 3:
                return $value - 2;
                break;
            case 4:
                break;
            default:
        }

        return 0;
    }

    /**
     * @return int[]
     */
    public function forExample(): array
    {
        $result = [];
        for($i =0; $i < 10; $i++)
        {
            $result[] = $i;
        }

        return $result;
    }

    public function doWhileExample(): void
    {
        $i = 0;
        do
            {
            $i++;
        }
        while ($i > 10);
    }

    /**
     * @param string[] $values
     *
     * @return string[]
     */
    public function foreachExample(array $values): array
    {
        $result = [];
        foreach($values as $value) {
            if ($value !== '1') {
                continue;
            }

            $result[] = $value;
        }

        return $result;
    }
}
