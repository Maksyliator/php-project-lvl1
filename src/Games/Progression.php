<?php

namespace Php\Project\Lvl1\Games\Progression;

use function cli\line;
use function cli\prompt;

function playProgression():string
{
    $progressionStep = rand(1, 10);
    $firstNumberOfProgression = rand(1, 100);
    $itemNumberForQuestion = rand(0, 9);
    $progression[0] = $firstNumberOfProgression;
    $question = $progression[0];
    for ($i = 1; $i <= 9; $i++) {
        $progression[$i] = $progression[$i - 1] + $progressionStep;
        $itemNumberForQuestion !== $i ? $question .= " {$progression[$i]}" : $question .= ' ..';
    }
    line('Question: %s', $question);
    $answer = prompt('Your answer');
    return (int)$answer === $progression[$itemNumberForQuestion] ? 'Correct!' :
        "'{$answer}' is wrong answer ;(. Correct answer was '{$progression[$itemNumberForQuestion]}'.";
}
