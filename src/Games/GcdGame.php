<?php

//CLI-game. Greatest Common Divisor

namespace BrainGames\Games\GcdGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

const MIN_NUMBER = 0;
const MAX_NUMBER = 100;

function isGcd(int $numberOne, int $numberTwo): int
{
    while ($numberTwo !== 0) {
        $temp = $numberTwo;
        $numberTwo = $numberOne % $numberTwo;
        $numberOne = $temp;
    }
    return $numberOne;
}

function runGcdGame(): void
{
    $description = "Find the greatest common divisor of given numbers.";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < ROUND_COUNT; $rightAnswers++) {
        $numberOne = random_int(MIN_NUMBER, MAX_NUMBER);
        $numberTwo = random_int(MIN_NUMBER, MAX_NUMBER);
        $question = "$numberOne $numberTwo";

        $rightAnswer = (string) isGcd($numberOne, $numberTwo);
        $data[$question] = $rightAnswer;
    }
    runEngine($description, $data);
}
