<?php

//CLI-game. Is a number even?

namespace BrainGames\Games\EvenGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUND_COUNT;

const MIN_NUMBER = 1;
const MAX_NUMBE = 100;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runEvenGame(): void
{
    $description = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < ROUND_COUNT; $rightAnswers++) {
        $question = random_int(MIN_NUMBER, MAX_NUMBER);
        $rightAnswer = isEven($question) ? ('yes') : ('no');

        $data[$question] = $rightAnswer;
    }
    runEngine($description, $data);
}
