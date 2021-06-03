<?php

namespace Brain\Games\Games\Gcd;

use function Brain\Games\Engine\playGame;

use const Brain\Games\Engine\NUMBER_OF_ROUND;

const RULE_OF_GAME = 'Find the greatest common divisor of given numbers.';

function playGCD(): void
{
    $questionsAndResults = [];
    for ($i = 1; $i <= NUMBER_OF_ROUND; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $question = "$number1 $number2";
        $result = isGreatestCommonDivisor($number1, $number2);
        $questionsAndResults[$question] = (string) $result;
    }
    playGame(RULE_OF_GAME, $questionsAndResults);
}

function isGreatestCommonDivisor(int $number1, int $number2): int
{
    $gcd = 0;
    for ($i = $number1; $i > 0; $i--) {
        if ($number1 % $i == 0 && $number2 % $i == 0) {
            $gcd = $i;
            break;
        }
    }
    return $gcd;
}
