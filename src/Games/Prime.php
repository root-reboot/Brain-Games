<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\gameRun;


function brainPrime()
{
    $gameTask = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameData = [];

    for ($i = 0; $i < 3; $i++) {

        $number = rand(1, 100);
        
        if (isPrime($number) === true) {
            $gameData[$number] = 'yes';
        } else {
            $gameData[$number] = 'no';
        }
    }
    gameRun($gameTask, $gameData);
}

function isPrime($n)
{
    for ($x=2; $x <= sqrt($n); $x++) {
        if($n % $x == 0) {
            return false;
        }
    }
    return true;
}