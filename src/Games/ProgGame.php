<?php

//CLI-game. Progression number

namespace BrainGames\Games\ProgGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

const MIN_PROGRESSION_LENGTH = 5;
const MAX_PROGRESSION_LENGTH = 10;
const MIN_STEPS_NUMBER = 1;
const MAX_STEPS_NUMBER = 10;
const MIN_START_NUMBER = 1;
const MAX_START_NUMBER = 100;

function progression(int $startNumber, int $progressionStep, int $progressionLength): array
{
    $progression = [];
    for ($i = 0; $i < $progressionLength; $i++) {
        $progression[] = $startNumber + ($i * $progressionStep);
    } return $progression;
}

function runProgressionGame(): void
{
    $description = "What number is missing in the progression?";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        $progressionLength = random_int(MIN_PROGRESSION_LENGTH, MAX_PROGRESSION_LENGTH);
        $progressionStep = random_int(MIN_STEPS_NUMBER, MAX_STEPS_NUMBER);
        $startNumber = random_int(MIN_START_NUMBER, MAX_START_NUMBER);
        $progression = progression($startNumber, $progressionStep, $progressionLength);

        $hiddenIndex = random_int(0, $progressionLength - 1);
        $rightAnswer = (string) $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';

        $question = implode(' ', $progression);
        $data += [$question => $rightAnswer];
    }
    runEngine($description, $data);
}
