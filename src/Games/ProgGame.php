<?php

//CLI-game. Progression number

namespace BrainGames\Games\ProgGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

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
        $progLength = rand(5, 10);
        $progStep = rand(1, 10);
        $startNumber = rand(1, 100);
        $progression = progression($startNumber, $progStep, $progLength);

        $hiddenIndex = rand(0, $progLength - 1);
        $rightAnswer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';

        $question = implode(' ', $progression);
        $data += [$question => $rightAnswer];
    }
    runEngine($description, $data);
}
