<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function useGameLogic(string $rulesOfTheGame, array $question, array $result): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($rulesOfTheGame);
    for ($i = 0; $i <= 2; $i++) {
        line('Question: %s', $question[$i]);
        $answer = prompt('Your answer');
        if ((string) $result[$i] === $answer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$result[$i]}'.
Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
