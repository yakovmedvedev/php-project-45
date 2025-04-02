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
        if ($number < 2) {
            return false;
        }
        
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        
        return true;
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