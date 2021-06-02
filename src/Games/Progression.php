<?php

namespace Brain\Games\Games\Progression;

use function Brain\Games\Engine\playGame;

use const Brain\Games\Engine\NUMBER_OF_ROUND;

const RULE_OF_GAME = 'What number is missing in the progression?';

function playProgression(): void
{
    $questionsAndResults = [];
    for ($i = 1; $i <= NUMBER_OF_ROUND; $i++) {
        $lengthProgression = rand(5, 10);
        $firstNumberOfProgression = rand(1, 100);
        $progressionStep = rand(1, 10);
        $itemNumberForQuestion = rand(0, ($lengthProgression - 1));
        $progression = calculateTheProgression($lengthProgression, $firstNumberOfProgression, $progressionStep);
        list($question, $result) = prepareQuestionAndResult($progression, $itemNumberForQuestion);
        $questionsAndResults[$question] = $result;
    }
    playGame(RULE_OF_GAME, $questionsAndResults);
}

function calculateTheProgression(int $lengthProgression, int $firstNumberOfProgression, int $progressionStep): array
{
    $progression = [];
    for ($i = 0; $i < $lengthProgression; $i++) {
        $progression[$i] = $firstNumberOfProgression + (($i + 1) - 1) * $progressionStep;
    }
    return $progression;
}

function prepareQuestionAndResult(array $progression, int $itemNumberForQuestion): array
{
    $question = '';
    $result = $progression[$itemNumberForQuestion];
    for ($i = 0; $i < count($progression); $i++) {
        $itemNumberForQuestion !== $i ? $question .= "$progression[$i] " : $question .= '.. ';
    }
    return [$question, $result];
}
