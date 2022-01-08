<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function brainEven()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < 3; $i++) {
        $number = rand(0,100);

        line("Question: %s", $number);
        $answer = prompt('Your answer');
        
        if ($answer === 'yes' && ($number % 2) == 0) {
            line('Correct!');
        } else if ($answer === 'no' && !($number % 2) == 0) {
            line('Correct!');
        } else {
            line("Let's try again", $name);
            break;
        }
    }
    if ($i === 3) {
        line("Congratulations: %s", $name);
    }
}
