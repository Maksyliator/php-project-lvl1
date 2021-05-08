<?php

namespace Brain\Prime\Prime;

use function cli\line;
use function cli\prompt;

function primeNumber()
{
    $rndNumber = rand(1, 100);
    $correctAnswer = is_prime($rndNumber);
    line('Question: %s', $rndNumber);
    $answer = prompt('Your answer');
    return $answer === $correctAnswer ? 'Correct!' :
        "'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.";
}

function is_prime($number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return "no";
        }
    }
    return "yes";
}
