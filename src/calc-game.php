<?php


namespace BrainGames\CalcGame;

use function cli\line;
use function cli\prompt;

function mathOper() {

    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line("What is the result of the expression?");
    
    $operations = ['+', '-', '*'];

    for ($i = 0; $i < 3; $i++) {
        // Generate two random numbers
        $number1 = rand(1, 10); // Random number between 1 and 10
        $number2 = rand(1, 10); // Random number between 1 and 10
        $operation = $operations[array_rand($operations)]; // random operation

        // Calculate the correct answer
        switch ($operation) {
            case '+':
                $correctAnswer = $number1 + $number2;
                break;
            case '-':
                $correctAnswer = $number1 - $number2;
                break;
            case '*':
                $correctAnswer = $number1 * $number2;
                break;
            default:
                throw new Exception("Invalid operation");
        }

        // Ask the user the question
        echo "What is $number1 $operation $number2? ";
        $userAnswer = trim(fgets(STDIN)); // Get the user's input

        // Check if the user's answer is correct
        if ((int)$userAnswer === $correctAnswer) {
            echo "Correct!\n";
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'. Let's try again, $name!");
            exit();
            // break;
        }
        
    }
    line("Congratulations, $name!");
}
// mathOper();

