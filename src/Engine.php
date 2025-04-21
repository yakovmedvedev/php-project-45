<?php

//CLI-games common logic

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const QUESTIONS_NUM = 3;

function greetUser(): string
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, $name!");
    return $name;
}

function runEngine(string $description, array $data): void
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

function checkUserAnswer(string $userAnswer, string $rightAnswer, string $name): ?string
{
    if ($userAnswer === $rightAnswer) {
        return line("Correct!\n");
    } else {
        line("\033[91m'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'. Let's try again, $name!\n");
        exit("Bye-bye!\n");
    }
}

function finishGame(string $name): void
{
    line("\033[92mCongratulations, %s!", $name);
    exit("Bye-bye!\n");
}
