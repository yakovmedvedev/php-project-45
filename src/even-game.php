<?php


namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;

function isEven($number) {
    return $number % 2 === 0;
}

function evenGame() {
    line("Welcome to the Brain Game!");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    // $correctAnswers = 0;

    for ($correctAnswers = 0 ; $correctAnswers < 3 ; $correctAnswers++) {
        $randomNumber = rand(1, 100);
        line("Question: $randomNumber");
        $userAnswer = prompt("Your answer");

        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';

        if ($userAnswer === $correctAnswer) {
            line("Correct!\n");
            // $correctAnswers++;
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'. Let's try again, $name!");
            exit();
            // return false;
            // break;
            // $correct_answers = 0; 
        }
    }
    line("Congratulations, $name!");    
}
// evenGame();
