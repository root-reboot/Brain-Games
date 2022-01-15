<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Games\Even\brainEven;
use function Brain\Games\Games\Calc\brainCalc;
use function Brain\Games\Games\Gcd\brainGcd;

function gameRun($gameTask, $gameData)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($gameTask);
    $counter = 0;

    foreach ($gameData as $gameQuestion => $trueAnswer) {
        line("Question: {$gameQuestion}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer !== $trueAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$trueAnswer}'.");
            line("Let's try again, %s!", $name);
            break;
        } else {
            $counter++;
            line('Correct!');
        }
    }
    if ($counter === 3) {
        line("Congratulations, %s", $name);
    }
}