<?php

//CLI-game. Is a number prime?

namespace BrainGames\Games\PrimeGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

const MIN_VALUE = 1;
const MAX_VALUE = 100;

function isPrime(int $number): bool
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

function runPrimeGame(): void
{
    $description = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        $randomNumber = random_int(MIN_VALUE, MAX_VALUE);
        $question = $randomNumber;
        $rightAnswer = (string) isPrime($randomNumber) ? 'yes' : 'no';

        $data[$question] = $rightAnswer;
    }
    runEngine($description, $data);
}
