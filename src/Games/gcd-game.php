<?php

namespace BrainGames\Games\GcdGame;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\checkUserAnswer;
use function BrainGames\Engine\finishGame;
use function cli\line;
use function cli\prompt;

use BrainGames\Engine;

function gcdGame()
{
    $name = greetUser(); // Call the greetUser function

    line("Find the greatest common divisor of given numbers.");

    $numberOne = rand(0, 100);
    $numberTwo = rand(0, 100);
    line("Qestion: $numberOne $numberTwo");

    while ($numberTwo !== 0) {
        $temp = $numberTwo;
        $numberTwo = $numberOne % $numberTwo;
        $numberOne = $temp;
    }

    $rightAnswer = $numberOne;
    // return $rightAnswer; 

    $userAnswer = prompt("Your answer");
    
    checkUserAnswer($userAnswer, $rightAnswer, $name);
    finishGame($name);
}
//$gsd = gcd();
//print_r('$gcd = ' . $gsd . "\n");
