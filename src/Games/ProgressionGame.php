<?php

//CLI-game. Progression number

namespace BrainGames\Games\ProgressionGame;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_MIN_COUNT = 5;
const PROGRESSION_MAX_COUNT = 10;
const PROGRESSION_MIN_STEP = 1;
const PROGRESSION_MAX_STEP = 10;
const MIN_START_NUMBER = 1;
const MAX_START_NUMBER = 100;

function runProgressionGame(): void
{
    $description = GAME_DESCRIPTION;
    $data = [];

    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $progressionLength = random_int(PROGRESSION_MIN_COUNT, PROGRESSION_MAX_COUNT);
        $progressionStep = random_int(PROGRESSION_MIN_STEP, PROGRESSION_MAX_STEP);
        $startNumber = random_int(MIN_START_NUMBER, MAX_START_NUMBER);
        $endNumber = $startNumber + ($progressionLength * $progressionStep);
        $progression = range($startNumber, $endNumber, $progressionStep);

        $hiddenIndex = random_int(0, $progressionLength - 1);
        $rightAnswer = (string) $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';

        $question = implode(' ', $progression);
        $data += [$question => $rightAnswer];
    }
    runEngine($description, $data);
}
