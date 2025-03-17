<?php


namespace BrainGames\EvenGame;
// use WP_CLI\Utils; // Ensure to include this
use function cli\line;
use function cli\prompt;

function is_even($number) {
    return $number % 2 === 0;
}

function even_game() {
    line("Hello, this is the brain-games!");
    $name = prompt("What's your name?");
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    $correct_answers = 0;

    while ($correct_answers < 3) {
        $random_number = rand(1, 100);
        line("Question: $random_number");
        $answer = prompt("");

        $correct_answer = is_even($random_number) ? 'yes' : 'no';

        if ($answer === $correct_answer) {
            line("Correct!");
            $correct_answers++;
        } else {
            line("$answer is wrong answer ;(. Correct answer was $correct_answer. Let's try again, $name.");
           //$correct_answers = 0; // Reset count on a wrong answer
           return;
        }
    }

    line("Congratulations, $name!");
}

// even_game();
