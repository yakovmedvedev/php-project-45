<?php

/**
 * CLI-game. Progression number
 * PHP version 8.3.6
 *
 * @category CLI-games
 * @package  Games_Of_Mindproject
 * @author   Yakov Medvedev <yakovmedvedev@gmail.com>
 * @license  https://github.com/yakovmedvedev/php-project-45 MIT
 * @link     https://github.com/yakovmedvedev/php-project-45
 */

namespace BrainGames\Games\ProgGame;

use BrainGames\Engine;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\progression;
use function BrainGames\Engine\checkUserAnswer;
use function BrainGames\Engine\finishGame;
use function cli\line;
use function cli\prompt;

/**
 * Game logic
 */
function progGame()
{
    $name = greetUser();

    line("What number is missing in the progression?");

    for ($rightAnswers = 0; $rightAnswers < 3; $rightAnswers++) {
        $progLength = rand(5, 10);
        $progStep = rand(1, 10);
        $startNumber = rand(1, 100);
        $progression = progression($startNumber, $progStep, $progLength);

        $hiddenIndex = rand(0, $progLength - 1);
        $rightAnswer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';

        line("Question: " . implode(' ', $progression));

        $userAnswer = prompt("Your answer");

        checkUserAnswer((int)$userAnswer, $rightAnswer, $name);
    }
    finishGame($name);
}
// progGame();
