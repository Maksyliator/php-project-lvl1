<?php

namespace Brain\Games\Games\Prime;

use function Brain\Games\Engine\useGameLogic;

function playPrimeNumber(): void
{
    $question = [];
    $result = [];
    $rulesOfTheGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    for ($i = 0; $i <= 2; $i++) {
        $question[$i] = rand(1, 100);
        $result[$i] = checkIfPrimeNumber($question[$i]);
    }
    useGameLogic($rulesOfTheGame, $question, $result);
}

function checkIfPrimeNumber(int $number): string
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return "no";
        }
    }
    return "yes";
}
