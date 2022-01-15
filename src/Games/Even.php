<?php

namespace Brain\Games\Games\Even;

use function Brain\Games\Engine\gameRun;

function brainEven()
{
    $gameTask = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameData = [];

    for ($i = 0; $i < 3; $i++) {
        $gameQuestion = rand(0, 100);
        $gameData[$gameQuestion] = (($gameQuestion % 2) == 0) ? 'yes' : 'no';
    }
    gameRun($gameTask, $gameData);
}
