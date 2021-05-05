<?php

namespace Brain\Calc\Calculator;

use function cli\line;
use function cli\prompt;

function calculator()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What is the result of the expression?');
    for ($i = 1; $i <= 3; $i++) {
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
        if ($result === (int)$answer) {
            line('Correct!');
        } else {
            return line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.\nLet's try again, %s!", $name);
        }
    }
    return line("Congratulations, %s!", $name);
}
