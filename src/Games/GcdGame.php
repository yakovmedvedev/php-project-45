<?php

//CLI-game. Greatest Common Divisor

namespace BrainGames\Games\GcdGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

function runGcdGame(): void
{
    $description = "Find the greatest common divisor of given numbers.";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        $numberOne = rand(0, 100);
        $numberTwo = rand(0, 100);
        $question = "$numberOne $numberTwo";
        while ($numberTwo !== 0) {
            $temp = $numberTwo;
            $numberTwo = $numberOne % $numberTwo;
            $numberOne = $temp;
        }

        $rightAnswer = $numberOne;
        $data += [$question => $rightAnswer];
    }
    runEngine($description, $data);
}
