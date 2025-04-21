<?php


//CLI-game. Prime number

namespace BrainGames\Games\PrimeGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

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
        $randomNumber = rand(1, 100);
        $question = $randomNumber;
        $rightAnswer = isPrime($randomNumber) ? 'yes' : 'no';

        $data += [$question => $rightAnswer];
    }
    runEngine($description, $data);
}
