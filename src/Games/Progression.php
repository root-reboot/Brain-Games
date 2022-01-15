<?php

namespace Brain\Games\Games\Progression;

use function Brain\Games\Engine\gameRun;

function brainProgression()
{
    $gameTask = 'What number is missing in the progression?';
    $gameData = [];

    for ($i = 0; $i < 3; $i++) {
        $coefficient = rand(2, 10);
        $start = rand(1, 99);
        $skipPosition = rand(0, 9);
        $tempQuestion = [];

        for ($j = $start; count($tempQuestion) < 10; $j = $j + $coefficient) {
            $tempQuestion[] = $j;
        }

        $skipNumber = $tempQuestion[$skipPosition];
        $tempQuestion[$skipPosition] = '..';
        $gameQuestion = implode(" ", $tempQuestion);

        $gameData[$gameQuestion] = (string)$skipNumber;
    }
    gameRun($gameTask, $gameData);
}
