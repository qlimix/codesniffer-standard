<?php declare(strict_types=1);

namespace Expected;

use function is_numeric;

final class Typing
{
    private const FOO = 99;
    protected const BAR = 'bar';
    public const FOOBAR = 'foobar';

    private $integer;

    protected $float;

    public $string;

    public function isBiggerThan($int)
    {
        return $this->integer > $int && $int > self::FOO;
    }

    protected function isSmallerThen($float)
    {
        return $float > $this->float;
    }

    public function isNumeric()
    {
        return is_numeric($this->string);
    }

    public function fooBar($strings)
    {
        foreach ($strings as $string) {
            if (is_numeric($string)) {
                return;
            }
        }
    }
}
