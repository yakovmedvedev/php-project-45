<?php

//CLI-game. Is a number prime?

namespace BrainGames\Games\PrimeGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUND_COUNT;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function isPrimeNumber(int $number): bool
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrimeNumberGame(): void
{
    $description = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < ROUND_COUNT; $rightAnswers++) {
        $randomNumber = random_int(MIN_NUMBER, MAX_NUMBER);
        $question = $randomNumber;
        $rightAnswer = isPrimeNumber($randomNumber) ? ('yes') : ('no');

        $data[$question] = $rightAnswer;
    }
    runEngine($description, $data);
}
