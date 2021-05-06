<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Even\Paritycheck\parityCheck;
use function Brain\Calc\Calculator\calculator;
use function Brain\Gcd\Gcd\nod;

function gameLogic()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("Select the game number.");
    line("1. Parity check");
    line("2. Calculator");
    line("3. GCD");
    $gameNumber = prompt('Enter its number');
    for ($i = 1; $i <= 3; $i++) {
        if ($gameNumber === '1') {
            if ($i === 1) {
                line('Answer "yes" if the number is even, otherwise answer "no".');
            }
            $result = parityCheck();
        }
        if ($gameNumber === '2') {
            if ($i === 1) {
                line('What is the result of the expression?');
            }
            $result = calculator();
        }
        if ($gameNumber === '3') {
            if ($i === 1) {
                line('Find the greatest common divisor of given numbers.');
            }
            $result = nod();
        }
        line($result, "\n");
        if ($result !== 'Correct!') {
            return line("Let's try again, %s!", $name);
        }
    }
    return line("Congratulations, %s!", $name);
}
