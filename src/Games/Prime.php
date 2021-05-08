<?php

namespace Php\Project\Lvl1\Games\Prime;

use function cli\line;
use function cli\prompt;

function playPrimeNumber():string
{
    $rndNumber = rand(1, 100);
    $correctAnswer = primeСheck($rndNumber);
    line('Question: %s', $rndNumber);
    $answer = prompt('Your answer');
    return $answer === $correctAnswer ? 'Correct!' :
        "'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.";
}

function primeСheck($number):string
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return "no";
        }
    }
    return "yes";
}
