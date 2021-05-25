<?php

namespace Brain\Games\Games\Gcd;

use function Brain\Games\Engine\useGameLogic;

use const Brain\Games\Engine\NUMBER_OF_ROUND;

const RULE_OF_GAME = 'Find the greatest common divisor of given numbers.';

function playNod(): void
{
    $questions = [];
    $results = [];
    for ($i = 1; $i <= NUMBER_OF_ROUND; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $questions[$i] = "$number1 $number2";
        $results[$i] = nod($number1, $number2);
    }
    useGameLogic(RULE_OF_GAME, $questions, $results);
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
