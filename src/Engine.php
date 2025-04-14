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
//Question title
const QUESTION = 'Question from const:';
//Invitation to answer
const ANSWER = 'Your answer from const';

//Greeting a user
function greetUser()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, $name!");
    return $name;
}
//logic of math operations for calc-game
function calculate(int $numberOne, int $numberTwo, string $operation): int
{
    switch ($operation) {
        case '+':
            return $numberOne + $numberTwo;
            break;
        case '-':
            return $numberOne - $numberTwo;
            break;
        case '*':
            return $numberOne * $numberTwo;
            break;
        // default:
        //     throw new \InvalidArgumentException("Invalid operation '$operation'");
    }
}
//Progression logic for prog-game
function progression(int $startNumber, int $progStep, int $progLength)
{
    $progression = [];
    for ($i = 0; $i < $progLength; $i++) {
        $progression[] = $startNumber + ($i * $progStep);
    } return $progression;
}
//Checking answers of a user
function checkUserAnswer(string $userAnswer, string $rightAnswer, string $name)
{
    if ($userAnswer === $rightAnswer) {
        line("Correct!\n");
    } else {
        line("\033[91m'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'. Let's try again, $name!\n");
        exit("Bye-bye!\n");
    }
}
//Succesfull finishing
function finishGame(string $name)
{
    line("\033[92mCongratulations, %s!", $name);
}
