<?php

namespace Brain\Calc\Calculator;

use function cli\line;
use function cli\prompt;

function calculator()
{
    $number1 = rand(1, 20);
    $number2 = rand(1, 20);
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
