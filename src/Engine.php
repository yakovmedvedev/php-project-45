<?php

/**
 * CLI-games common logic
 * PHP version 8.3.6
 *
 * @category CLI-games
 * @package  Games_Of_Mind-project
 * @author   Yakov Medvedev <yakovmedvedev@gmail.com>
 * @license  https://github.com/yakovmedvedev/php-project-45 MIT
 * @link     https://github.com/yakovmedvedev/php-project-45
 */

namespace BrainGames\Engine;
//CLI-dependensy functions
use function cli\line;
use function cli\prompt;
//Number of questions
const QUESTIONS_NUM = 3;

//Greeting a user
function greetUser()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, $name!");
    return $name;
}
//Main function running the game
function runEngine(string $description, array $data)
{
    $name = greetUser();
    line($description);

    foreach ($data as $question => $rightAnswer) {
        line("Question: $question");

        $userAnswer = prompt("Your answer");

        checkUserAnswer($userAnswer, $rightAnswer, $name);
    }
    finishGame($name);
}
//Checking answers of a user
function checkUserAnswer(string $userAnswer, string $rightAnswer, string $name)
{
    if ($userAnswer === $rightAnswer) {
        return line("Correct!\n");
    } else {
        line("\033[91m'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'. Let's try again, $name!\n");
        exit("Bye-bye!\n");
    }
} 
//Succesfull finishing
function finishGame(string $name)
{
    line("\033[92mCongratulations, %s!", $name);
    exit("Bye-bye!\n");
}
