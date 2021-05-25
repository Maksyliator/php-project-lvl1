<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\useGameLogic;

use const Brain\Games\Engine\NUMBER_OF_ROUND;

const RULE_OF_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function playPrimeNumber(): void
{
    $questions = [];
    $results = [];
    for ($i = 1; $i <= NUMBER_OF_ROUND; $i++) {
        $questions[$i] = rand(2, 100);
        isPrime($questions[$i]) ? $results[$i] = 'yes' : $results[$i] = 'no';
    }
    useGameLogic(RULE_OF_GAME, $questions, $results);
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
