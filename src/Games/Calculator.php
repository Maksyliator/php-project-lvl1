<?php

namespace Brain\Games\Games\Calculator;

use function Brain\Games\Engine\playGame;

use const Brain\Games\Engine\NUMBER_OF_ROUND;

const RULE_OF_GAME = 'What is the result of the expression?';

function playCalculator(): void
{
    $questionsAndResults = [];
    for ($i = 1; $i <= NUMBER_OF_ROUND; $i++) {
        list($question, $result) = getARandomMathExpression();
        $questionsAndResults[$question] = (string) $result;
    }
    playGame(RULE_OF_GAME, $questionsAndResults);
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

function calculate(int $number1, int $number2, string $mathematicalOperator): ?int
{
    $result = null;
    switch ($mathematicalOperator) {
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
