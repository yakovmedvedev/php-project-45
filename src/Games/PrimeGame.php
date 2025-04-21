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

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

//Checking wether a number is prime
function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
//Game logic
function runPrimeGame(): void
{
    $description = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        $randomNumber = rand(1, 100);
        $question = $randomNumber;
        $rightAnswer = isPrime($randomNumber) ? 'yes' : 'no';

        $data += [$question => $rightAnswer];
    }
    runEngine($description, $data);
}
