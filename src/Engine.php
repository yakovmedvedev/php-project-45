<?php
/*
 CLI-games common logic
*/
namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
/*
Greeting a user
*/
function greetUser()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, $name!");
    return $name;
}
/*
 Progression for prog-game
*/
function progression($startNumber, $progStep, $progLength)
{
    $progression = [];
    for ($i = 0; $i < $progLength; $i++) {        
        $progression[] = $startNumber + ($i * $progStep);
    } return $progression;
}
/*
 Checking answers of a user
*/
function checkUserAnswer($userAnswer, $rightAnswer, $name)
{
    if ($userAnswer === $rightAnswer) {
        line("Correct!\n");
    } else {
        line("\033[91m'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'. Let's try again, $name!\n");
        exit("Bye-bye!\n");
    }
}
/*
 Successing finishing
*/
function finishGame($name)
{
    line("\033[92mCongratulations, %s!", $name);
}


