<?php

/**
 * CLI-game. Greatest Common Divisor
 * PHP version 8.3.6
 *
 * @category CLI-games
 * @package  Games_Of_Mindproject
 * @author   Yakov Medvedev <yakovmedvedev@gmail.com>
 * @license  https://github.com/yakovmedvedev/php-project-45 MIT
 * @link     https://github.com/yakovmedvedev/php-project-45
 */

namespace BrainGames\Games\GcdGame;

use BrainGames\Engine;

use const BrainGames\Engine\QUESTIONS_NUM;

use function BrainGames\Engine\runEngine;

//Game logic
function runGcdGame()
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
