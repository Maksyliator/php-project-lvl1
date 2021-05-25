<?php

namespace Brain\Games\Games\Calculator;

use function Brain\Games\Engine\useGameLogic;

use const Brain\Games\Engine\NUMBER_OF_ROUND;

const RULE_OF_GAME = 'What is the result of the expression?';

function playCalculator(): void
{
    $questions = [];
    $results = [];
    for ($i = 1; $i <= NUMBER_OF_ROUND; $i++) {
        list($questions[$i], $results[$i]) = getARandomMathExpression();
    }
    useGameLogic(RULE_OF_GAME, $questions, $results);
}

function getARandomMathExpression(): array
{
    $number1 = rand(1, 20);
    $number2 = rand(1, 20);
    $mathematicalOperations = ['+', '-', '*'];
    $randomMathematicalOperator = $mathematicalOperations[array_rand($mathematicalOperations)];
    $question = "$number1 $randomMathematicalOperator $number2";
    $result = calculate($number1, $number2, $randomMathematicalOperator);
    return [$question, $result];
}

function calculate(int $number1, int $number2, string $randomMathematicalOperator): int
{
    $result = null;
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
    return (int) $result;
}
