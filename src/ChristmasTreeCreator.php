<?php
declare(strict_types=1);

namespace Apeskovatzkov\ChristmasTreeCreator;

/**
 * Код класса сворован отсюда https://gist.github.com/sabbir-rupom/55baddf93958d714056f875d560f18d0
 */
class ChristmasTreeCreator
{
    private static function generateLeaves($n, $c): void
    {
        for ($i = 1; $i <= $n; $i += 2) {
            echo sprintf("%'. {$c}s\n", str_repeat('*', $i));
            $c++;
        }
    }

    private static function generateTrunk($n, $h): void
    {
        $s = $h + 1; // number of space for trunk prefix
        $trunk = sprintf("%'. {$s}s\n", str_repeat('*', 3));
        for ($i = 1; $i <= $h; $i += 2) {
            echo $trunk;
        }
    }

    public static function drawTree($n): void
    {
        $n = $n < 9 ? 9 : ($n & 1 ? $n : $n++);
        $p = ceil($n / 2);
        static::generateLeaves($n, $p);
        static::generateTrunk($n, $p);
    }
}