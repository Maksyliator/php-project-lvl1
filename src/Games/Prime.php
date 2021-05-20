<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\useGameLogic;

function playPrimeNumber(): void
{
    $question = [];
    $result = [];
    $rulesOfTheGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    for ($i = 0; $i <= 2; $i++) {
        $question[$i] = rand(2, 100);
        isPrime($question[$i]) ? $result[$i] = 'yes' : $result[$i] = 'no';
    }
    useGameLogic($rulesOfTheGame, $question, $result);
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
