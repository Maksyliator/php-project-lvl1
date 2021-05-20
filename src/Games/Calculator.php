<?php

namespace Brain\Games\Games\Calculator;

use function Brain\Games\Engine\useGameLogic;

use const Brain\Games\Engine\NUMBER_OF_ROUND;

const RULE_OF_GAME = 'What is the result of the expression?';

function playCalculator(): void
{
    $question = [];
    $result = [];
    for ($i = 1; $i <= NUMBER_OF_ROUND; $i++) {
        list($question[$i], $result[$i]) = getARandomMathExpression();
    }
    useGameLogic(RULE_OF_GAME, $question, $result);
}

function getARandomMathExpression(): array
{
    $question = '';
    $result = 0;
    $number1 = rand(1, 20);
    $number2 = rand(1, 20);
    $sum = 1;
    $difference = 2;
    $multiplication = 3;
    $determinantOfArithmeticExpression = rand(1, 3);
    switch ($determinantOfArithmeticExpression) {
        case $sum:
            $question = "{$number1} + {$number2}";
            $result = $number1 + $number2;
            break;
        case $difference:
            $question = "{$number1} - {$number2}";
            $result = $number1 - $number2;
            break;
        case $multiplication:
            $question = "{$number1} * {$number2}";
            $result = $number1 * $number2;
            break;
    }
    return array ($question, $result);
}
