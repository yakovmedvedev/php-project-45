<?php

/**
 * CLI-game. Prime number
 * PHP version 8.3.6
 *
 * @category CLI-games
 * @package  Games_Of_Mindproject
 * @author   Yakov Medvedev <yakovmedvedev@gmail.com>
 * @license  https://github.com/yakovmedvedev/php-project-45 MIT
 * @link     https://github.com/yakovmedvedev/php-project-45
 */

namespace BrainGames\Games\PrimeGame;

use BrainGames\Engine;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\checkUserAnswer;
use function BrainGames\Engine\finishGame;
use function cli\line;
use function cli\prompt;

/**
 * Checking wether number is prime
 */
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
/**
 * Game logic
 */
function primeGame()
{
    $name = greetUser();

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
