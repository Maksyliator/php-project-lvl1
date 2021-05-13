<?php

namespace Brain\Games\Games\Gcd;

use function Brain\Games\Engine\useGameLogic;

function playNod(): void
{
    $question = [];
    $result = [];
    $rulesOfTheGame = 'Find the greatest common divisor of given numbers.';
    for ($i = 0; $i <= 2; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $question[$i] = "{$number1} {$number2}";
        $result[$i] = nod($number1, $number2);
    }
    useGameLogic($rulesOfTheGame, $question, $result);
}

function nod(int $number1, int $number2): int
{
    $nod = 0;
    for ($i = $number1; $i > 0; $i--) {
        if ($number1 % $i == 0 && $number2 % $i == 0) {
            $nod = $i;
            break;
        }
    }
    return $nod;
}
