<?php

namespace Brain\Games\Games\Paritycheck;

use function Brain\Games\Engine\useGameLogic;

use const Brain\Games\Engine\NUMBER_OF_ROUND;

const RULE_OF_GAME = 'Answer "yes" if the number is even, otherwise answer "no".';

function playParityCheck(): void
{
    $question = [];
    $parityCheck = [];
    $result = [];
    for ($i = 1; $i <= NUMBER_OF_ROUND; $i++) {
        $question[$i] = rand(1, 100);
        $parityCheck[$i] = $question[$i] % 2;
        $parityCheck[$i] === 0 ? $result[$i] = 'yes' : $result[$i] = 'no';
    }
    useGameLogic(RULE_OF_GAME, $question, $result);
}