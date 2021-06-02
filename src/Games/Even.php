<?php

namespace Brain\Games\Games\Even;

use function Brain\Games\Engine\useGameLogic;

use const Brain\Games\Engine\NUMBER_OF_ROUND;

const RULE_OF_GAME = 'Answer "yes" if the number is even, otherwise answer "no".';

function playParityCheck(): void
{
    $questionsAndResults = [];
    for ($i = 1; $i <= NUMBER_OF_ROUND; $i++) {
        $question = rand(1, 100);
        isEven($question) ? $result = 'yes' : $result = 'no';
        $questionsAndResults[$question] = $result;
    }
    useGameLogic(RULE_OF_GAME, $questionsAndResults);
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
