<?php

namespace Brain\Even\Paritycheck;

use function cli\line;
use function cli\prompt;

function parityCheck()
{
    $rndNumber = rand(1, 100);
    line('Question: %s', $rndNumber);
    $answer = prompt('Your answer');
    $parityCheck = $rndNumber % 2;
    $parityCheck === 0 ? $correctAnswer = 'yes' : $correctAnswer = 'no';
    return $answer === $correctAnswer ? 'Correct!' :
        "'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.";
}
