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
    $number1 = rand(1, 20);
    $number2 = rand(1, 20);
    $mathematicalOperations = ['+', '-', '*'];
    $randomMathematicalOperator = $mathematicalOperations[array_rand($mathematicalOperations)];
    $question = "{$number1} {$randomMathematicalOperator} {$number2}";
    $result = calculate($number1, $number2, $randomMathematicalOperator);
    return array($question, $result);
}

function calculate($number1, $number2, $randomMathematicalOperator): int
{
    $result = 0;
    switch ($randomMathematicalOperator) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
    }
    return $result;
}
