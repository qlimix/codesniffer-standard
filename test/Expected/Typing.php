<?php declare(strict_types=1);

namespace Expected;

use function is_numeric;

final class Typing
{
    private const FOO = 99;
    protected const BAR = 'bar';
    public const FOOBAR = 'foobar';

    private int $integer;

    protected float $float;

    public string $string;

    public function isBiggerThan(int $int): bool
    {
        return $this->integer > $int && $int > self::FOO;
    }

    protected function isSmallerThen(float $float): bool
    {
        return $float > $this->float;
    }

    public function isNumeric(): bool
    {
        return is_numeric($this->string);
    }

    /**
     * @param string[] $strings
     */
    public function fooBar(array $strings): void
    {
        foreach ($strings as $string) {
            if (is_numeric($string)) {
                return;
            }
        }
    }
}
