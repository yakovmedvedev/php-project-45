<?php

//CLI-games common logic

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUND_COUNT = 3;

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

        if ($userAnswer === $rightAnswer) {
            line("Correct!\n");
        } else {
            line("\033[91m'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'.");
            line("Let's try again, $name!\nBye-bye!");
            return;
        }
    }
    line("\033[92mCongratulations, %s!", $name);
}
