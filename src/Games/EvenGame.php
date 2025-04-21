<?php

//CLI-game. Is a number even

namespace BrainGames\Games\EvenGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runEvenGame(): void
{
    $description = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        $question = rand(1, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';

        $data += [$question => $rightAnswer];
    }
    runEngine($description, $data);
}
