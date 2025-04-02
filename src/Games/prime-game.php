<?php

namespace BrainGames\Games\PrimeGame;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\checkUserAnswer;
use function BrainGames\Engine\finishGame;
use function cli\line;
use function cli\prompt;

use BrainGames\Engine;

function isPrime($number)
{
    return $number % 2 !== 0 && $number % 3 !== 0 && $number >1 || $number === 2;
}

function primeGame()
{
    $name = Engine\greetUser();

    line("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");

    for ($rightAnswers = 0; $rightAnswers < 3; $rightAnswers++) {
        $randomNumber = rand(1, 100);
        line("Question: $randomNumber");
        $userAnswer = prompt("Your answer");

        $rightAnswer = isPrime($randomNumber) ? 'yes' : 'no';

        checkUserAnswer($userAnswer, $rightAnswer, $name);
    }
    finishGame($name);
}