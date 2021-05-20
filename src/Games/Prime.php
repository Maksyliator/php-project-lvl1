<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\useGameLogic;
const  RULE_OF_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function playPrimeNumber(): void
{
    $question = [];
    $result = [];
    for ($i = 0; $i <= 2; $i++) {
        $question[$i] = rand(2, 100);
        isPrime($question[$i]) ? $result[$i] = 'yes' : $result[$i] = 'no';
    }
    useGameLogic(RULE_OF_GAME, $question, $result);
}

function isPrime(int $number): bool
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
