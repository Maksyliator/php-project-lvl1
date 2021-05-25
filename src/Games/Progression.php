<?php

namespace Brain\Games\Games\Progression;

use function Brain\Games\Engine\useGameLogic;

use const Brain\Games\Engine\NUMBER_OF_ROUND;

const RULE_OF_GAME = 'What number is missing in the progression?';

function playProgression(): void
{
    $results = [];
    $listOfQuestions = [];
    for ($i = 1; $i <= NUMBER_OF_ROUND; $i++) {
        list($question, $results[$i]) = prepareQuestionAndResult(calculateTheProgression());
        $listOfQuestions[$i] = $question;
    }
    useGameLogic(RULE_OF_GAME, $listOfQuestions, $results);
}

function calculateTheProgression(): array
{
    $progression = [];
    $progressionStep = rand(1, 10);
    $firstNumberOfProgression = rand(1, 100);
    $progression[0] = $firstNumberOfProgression;
    for ($i = 1; $i <= 9; $i++) {
        $progression[$i] = $progression[$i - 1] + $progressionStep;
    }
    return $progression;
}

function prepareQuestionAndResult(array $progression): array
{
    $question = '';
    $itemNumberForQuestion = rand(0, 9);
    $result = $progression[$itemNumberForQuestion];
    for ($i = 0; $i <= 9; $i++) {
        $itemNumberForQuestion !== $i ? $question .= "$progression[$i] " : $question .= '.. ';
    }
    return [$question, $result];
}
