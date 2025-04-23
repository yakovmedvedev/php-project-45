<?php

//CLI-game. Greatest Common Divisor

namespace BrainGames\Games\GcdGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

const MIN_VALUE = 0;
const MAX_VALUE = 100;

function findGcd(int $numberOne, int $numberTwo): int
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

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        $numberOne = random_int(MIN_VALUE, MAX_VALUE);
        $numberTwo = random_int(MIN_VALUE, MAX_VALUE);
        $question = "$numberOne $numberTwo";

        $rightAnswer = findGcd($numberOne, $numberTwo);
        $data[$question] = $rightAnswer;
    }
    runEngine($description, $data);
}
