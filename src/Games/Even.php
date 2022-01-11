<?php

namespace Brain\Games\Games\Even;

use function Brain\Games\Engine\gameRun;


function brainEven()
{
    $gameTask = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameData = [];

    for ($i = 0; $i < 3; $i++) {
        $gameQuestion = rand(0, 100);
        
        if (($gameQuestion % 2) == 0) {
            $gameData[$gameQuestion] = 'yes';
        } else {
            $gameData[$gameQuestion] = 'no';
        }
    }
    gameRun($gameTask, $gameData);
}