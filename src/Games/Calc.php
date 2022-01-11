<?php

namespace Brain\Games\Games\Calc;

use function Brain\Games\Engine\gameRun;


function brainCalc()
{
    $gameTask = 'What is the result of the expression?';
    $gameData = [];
    $operators = ['+', '-', '*'];

    for ($i = 0; $i < 3; $i++) {
        $operation = $operators[array_rand($operators, 1)];
        $numberOne = rand(0, 50);
        $numberTwo = rand(0, 50);

        if ($operation === "+") {
            $gameQuestion = "{$numberOne} {$operation} {$numberTwo}";
            $result = $numberOne + $numberTwo;
            $gameData[$gameQuestion] = (string)$result;

        } else if ($operation === "-") {
            $gameQuestion = "{$numberOne} {$operation} {$numberTwo}";
            $result = $numberOne - $numberTwo;
            $gameData[$gameQuestion] = (string)$result;
            
        } else if ($operation === "*") {
            $gameQuestion = "{$numberOne} {$operation} {$numberTwo}";
            $result = $numberOne * $numberTwo;
            $gameData[$gameQuestion] = (string)$result;
        }
    }
    gameRun($gameTask, $gameData);
}