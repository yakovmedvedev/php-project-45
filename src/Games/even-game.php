<?php

namespace BrainGames\Games\EvenGame;

use function cli\line;
use function cli\prompt;
use BrainGames\Engine;

//require_once(__DIR__ . '/../engine.php'); // Require the engine file

function isEven($number) {
    return $number % 2 === 0;
}

function evenGame() {
    $name = Engine\startGame("Welcome to the Brain Game!", 'May I have your name?', 'evenGame');

    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    for ($correctAnswers = 0; $correctAnswers < 3; $correctAnswers++) {
        $randomNumber = rand(1, 100);
        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';
        Engine\askQuestion($randomNumber, $correctAnswer, $name);
    }
    
    Engine\finishGame($name);
}

// evenGame();

