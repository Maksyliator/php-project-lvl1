<?php

namespace Brain\Games\Games\Calculator;

use function Brain\Games\Engine\useGameLogic;

function playCalculator(): void
{
    $question = [];
    $result = [];
    $rulesOfTheGame = "What is the result of the expression?";
    for ($i = 0; $i <= 2; $i++) {
        list($question[$i], $result[$i]) = getARandomMathExpression();
    }
    useGameLogic($rulesOfTheGame, $question, $result);
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
