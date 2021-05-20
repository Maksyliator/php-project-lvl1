<?php

namespace Brain\Games\Games\Progression;

use function Brain\Games\Engine\useGameLogic;
const  RULE_OF_GAME = 'What number is missing in the progression?';

function playProgression(): void
{
    $result = [];
    $listOfQuestions = [];
    for ($i = 0; $i <= 2; $i++) {
        list($question, $result[$i]) = prepareAQuestionAndResult(calculateTheProgression());
        $listOfQuestions[$i] = $question;
    }
    useGameLogic(RULE_OF_GAME, $listOfQuestions, $result);
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

function prepareAQuestionAndResult(array $progression): array
{
    $question = '';
    $itemNumberForQuestion = rand(0, 9);
    $result = $progression[$itemNumberForQuestion];
    for ($i = 0; $i <= 9; $i++) {
        $itemNumberForQuestion !== $i ? $question .= "{$progression[$i]} " : $question .= '.. ';
    }
    return array ($question, $result);
}
