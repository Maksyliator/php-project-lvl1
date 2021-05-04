<?php

namespace Brain\Even\Paritycheck;

use function cli\line;
use function cli\prompt;

function parityCheck()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 1; $i <= 3; $i++) {
        $rndNumber = rand(1, 100);
        line('Question: %s', $rndNumber);
        $answer = prompt('Your answer');
        if ((($rndNumber % 2) === 0) && ($answer === 'yes')) {
            line('Correct!');
        } elseif ((($rndNumber % 2) !== 0) && ($answer === 'no')) {
               line('Correct!');
        } else {
            return line("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, %s!", $name);
        }
    }
    return line("Congratulations, %s!", $name);
}
