<?php

namespace Php\Project\Lvl1\Games\Calculator;

use function cli\line;
use function cli\prompt;

function playCalculator(): string
{
    $number1 = rand(1, 20);
    $number2 = rand(1, 20);
    $question = '';
    $result = 0;
    $determinantOfArithmeticExpression = rand(1, 3);
    switch ($determinantOfArithmeticExpression) {
        case 1:
            $result = $number1 + $number2;
            $question = "{$number1} + {$number2}";
            break;
        case 2:
            $result = $number1 - $number2;
            $question = "{$number1} - {$number2}";
            break;
        case 3:
            $result = $number1 * $number2;
            $question = "{$number1} * {$number2}";
            break;
    }
    line('Question: %s', $question);
    $answer = prompt('Your answer');
    return $result === (int)$answer ? 'Correct!' : "'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.";
}
