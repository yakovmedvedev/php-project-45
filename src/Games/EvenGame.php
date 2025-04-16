<?php

/**
 * CLI-game. Is number even
 * PHP version 8.3.6
 *
 * @category CLI-games
 * @package  Games_Of_Mindproject
 * @author   Yakov Medvedev <yakovmedvedev@gmail.com>
 * @license  https://github.com/yakovmedvedev/php-project-45 MIT
 * @link     https://github.com/yakovmedvedev/php-project-45
 */

namespace BrainGames\Games\EvenGame;

use BrainGames\Engine;

use const BrainGames\Engine\QUESTIONS_NUM;

use function BrainGames\Engine\runEngine;


//Check-up the parity
function isEven(int $number)
{
    return $number % 2 === 0;
}
//Game logic
function runEvenGame()
{
    $description = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

    $data = [];

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        
        $question = rand(1, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';

        $data += [$question => $rightAnswer];
    }
    runEngine($description, $data);
}
