<?php

//CLI-game. Progression number

namespace BrainGames\Games\ProgGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

const MIN_LENGTH_VALUE = 5;
const MAX_LENGTH_VALUE = 10;
const MIN_STEP_VALUE = 1;
const MAX_STEP_VALUE = 10;
const MIN_START_NUMBER = 1;
const MAX_START_NUMBER = 100;

function progression(int $startNumber, int $progStep, int $progLength): array
{
    $progression = [];
    for ($i = 0; $i < $progLength; $i++) {
        $progression[] = $startNumber + ($i * $progStep);
    } return $progression;
}

function runProgGame(): void
{
    $description = "What number is missing in the progression?";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        $progLength = random_int(MIN_LENGTH_VALUE, MAX_LENGTH_VALUE);
        $progStep = random_int(MIN_STEP_VALUE, MAX_STEP_VALUE);
        $startNumber = random_int(MIN_START_NUMBER, MAX_START_NUMBER);
        $progression = progression($startNumber, $progStep, $progLength);

        $hiddenIndex = random_int(0, $progLength - 1);
        $rightAnswer = (string) $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';

        $question = implode(' ', $progression);
        $data += [$question => $rightAnswer];
    }
    runEngine($description, $data);
}
