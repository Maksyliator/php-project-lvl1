<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Games\Calculator\playCalculator;
use function Brain\Games\Games\Gcd\playNod;
use function Brain\Games\Games\Paritycheck\playParityCheck;
use function Brain\Games\Games\Progression\playProgression;
use function Brain\Games\Games\Prime\playPrimeNumber;

function useGameLogic(string $gameNumber): void
{
    $result = '';
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 1; $i <= 3; $i++) {
        if ($gameNumber === 'even') {
            if ($i === 1) {
                line('Answer "yes" if the number is even, otherwise answer "no".');
            }
            $result = playParityCheck();
        }
        if ($gameNumber === 'calc') {
            if ($i === 1) {
                line('What is the result of the expression?');
            }
            $result = playCalculator();
        }
        if ($gameNumber === 'gcd') {
            if ($i === 1) {
                line('Find the greatest common divisor of given numbers.');
            }
            $result = playNod();
        }
        if ($gameNumber === 'progression') {
            if ($i === 1) {
                line('What number is missing in the progression?');
            }
            $result = playProgression();
        }
        if ($gameNumber === 'primeNumber') {
            if ($i === 1) {
                line('Answer "yes" if given number is prime. Otherwise answer "no".');
            }
            $result = playPrimeNumber();
        }
        line($result, "\n");
        if ($result !== 'Correct!') {
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
