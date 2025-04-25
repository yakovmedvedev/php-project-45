<?php

//CLI-game. Is a number prime?

namespace BrainGames\Games\PrimeGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

const MIN_NUMBER_VALUE = 1;
const MAX_NUMBER_VALUE = 100;

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

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        $randomNumber = random_int(MIN_NUMBER_VALUE, MAX_NUMBER_VALUE);
        $question = $randomNumber;
        $rightAnswer = isPrimeNumber($randomNumber) ? ('yes') : ('no');

        $data[$question] = $rightAnswer;
    }
    runEngine($description, $data);
}
