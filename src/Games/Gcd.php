<?php

namespace Brain\Gcd\Gcd;

use function cli\line;
use function cli\prompt;

function nod()
{
    $number1 = rand(1, 100);
    $number2 = rand(1, 100);
    $question = "{$number1} {$number2}";
    line('Question: %s', $question);
    $answer = prompt('Your answer');
    for ($i = $number1; $i > 0; $i--) {
        if ($number1 % $i == 0 && $number2 % $i == 0) {
            $nod = $i;
            break;
        }
    }
    return (int)$answer === $nod ? 'Correct!' : "'{$answer}' is wrong answer ;(. Correct answer was '{$nod}'.";
}
