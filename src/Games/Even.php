<?php

namespace Brain\Games\Games\Even;

use function Brain\Games\Engine\useGameLogic;

use const Brain\Games\Engine\NUMBER_OF_ROUND;

const RULE_OF_GAME = 'Answer "yes" if the number is even, otherwise answer "no".';

function playParityCheck(): void
{
    $questions = [];
    $results = [];
    for ($i = 1; $i <= NUMBER_OF_ROUND; $i++) {
        $question[$i] = rand(1, 100);
        isEven($questions[$i]) ? $results[$i] = 'yes' : $results[$i] = 'no';
    }
    useGameLogic(RULE_OF_GAME, $questions, $results);
}

function isEven(int $number): bool
{
    $parityCheck = $number % 2;
    return $parityCheck === 0 ? true : false;
}
