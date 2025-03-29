<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function greetUser() {
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, $name!");
    return $name;
}

function checkUserAnswer($userAnswer, $rightAnswer, $name) {
    if ($userAnswer === $rightAnswer) {
        line("Correct!\n");
    } else {
        line("\033[91m'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'. Let's try again, $name!\n");
        exit("Bye-bye!\n");
    }
}

function finishGame($name) {
    line("\033[92mCongratulations, %s!", $name);
}


