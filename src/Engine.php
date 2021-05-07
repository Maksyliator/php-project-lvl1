<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Even\Paritycheck\parityCheck;
use function Brain\Calc\Calculator\calculator;
use function Brain\Gcd\Gcd\nod;
use function Brain\Progression\Progression\progression;

function gameLogic(string $gameNumber)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 1; $i <= 3; $i++) {
        if ($gameNumber === 'even') {
            if ($i === 1) {
                line('Answer "yes" if the number is even, otherwise answer "no".');
            }
            $result = parityCheck();
        }
        if ($gameNumber === 'calc') {
            if ($i === 1) {
                line('What is the result of the expression?');
            }
            $result = calculator();
        }
        if ($gameNumber === 'gcd') {
            if ($i === 1) {
                line('Find the greatest common divisor of given numbers.');
            }
            $result = nod();
        }
        if ($gameNumber === 'progression') {
            if ($i === 1) {
                line('What number is missing in the progression?');
            }
            $result = progression();
        }
        line($result, "\n");
        if ($result !== 'Correct!') {
            return line("Let's try again, %s!", $name);
        }
    }
    return line("Congratulations, %s!", $name);
}
