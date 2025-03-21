<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function startGame($welcomeMessage, $namePrompt, $gameLogic) {
    line($welcomeMessage);
    $name = prompt($namePrompt);
    line("Hello, %s!", $name);
    return $name;
}

function askQuestion($question, $correctAnswer, $name) {
    line("Question: $question");
    $userAnswer = prompt("Your answer");

    if ($userAnswer === $correctAnswer) {
        line("Correct!\n");
    } else {
        line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'. Let's try again, $name!");
        exit();
    }
}

function finishGame($name) {
    line("Congratulations, %s!", $name);
}


