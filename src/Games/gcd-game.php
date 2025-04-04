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

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\checkUserAnswer;
use function BrainGames\Engine\finishGame;
use function cli\line;
use function cli\prompt;

/**
 * Game logic
 */
function gcdGame()
{
    $name = greetUser();

    line("Find the greatest common divisor of given numbers.");
    for ($rightAnswers = 0; $rightAnswers < 3; $rightAnswers++) {
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
        $userAnswer = (int)$userAnswer;
        checkUserAnswer($userAnswer, $rightAnswer, $name);
    }
    finishGame($name);
}
