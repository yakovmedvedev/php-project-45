<?php

//CLI-game. Is a number even?

namespace BrainGames\Games\EvenGame;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function runEvenGame(): void
{
    $description = GAME_DESCRIPTION;
    $data = [];

    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $question = random_int(MIN_NUMBER, MAX_NUMBER);
        $rightAnswer = isEven($question) ? 'yes' : 'no';

        $data[$question] = $rightAnswer;
    }
    runEngine($description, $data);
}
