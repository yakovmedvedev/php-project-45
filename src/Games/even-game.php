<?php
/*
 CLI-game. Is number even
*/
namespace BrainGames\Games\EvenGame;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\checkUserAnswer;
use function BrainGames\Engine\finishGame;
use function cli\line;
use function cli\prompt;

use BrainGames\Engine;
/*
 Check-up the parity
*/
function isEven($number)
{
    return $number % 2 === 0;
}
/*
 Game logic
*/
function evenGame()
{
    $name = greetUser();

    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    for ($rightAnswers = 0; $rightAnswers < 3; $rightAnswers++) {
        $randomNumber = rand(1, 100);
        line("Question: $randomNumber");
        $userAnswer = prompt("Your answer");

        $rightAnswer = isEven($randomNumber) ? 'yes' : 'no';

        checkUserAnswer($userAnswer, $rightAnswer, $name);
    }
    finishGame($name);
}