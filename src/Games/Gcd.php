<?php

namespace Brain\Games\Games\Gcd;

use function Brain\Games\Engine\gameRun;

function brainGcd()
{
    $gameTask = 'Find the greatest common divisor of given numbers.';
    $gameData = [];

    for ($i = 0; $i < 3; $i++) {
        $a = abs(rand(0, 100));
        $b = abs(rand(0, 100));
        $gameQuestion = "{$a} {$b}";

        while ($a != $b) {
            if ($a > $b) {
                $a -= $b;
            } else {
                $b -= $a;
            }
        }
        $gameData[$gameQuestion] = (string)$a;
    }
    gameRun($gameTask, $gameData);
}
