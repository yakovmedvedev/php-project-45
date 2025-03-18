<?php

function getRandomNumber() {
    return rand(1, 10); // Random number between 1 and 10
}

function askMathQuestion($operation) {
    $number1 = getRandomNumber();
    $number2 = getRandomNumber();
    
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

    echo "What is $number1 $operation $number2? ";
    $userAnswer = trim(fgets(STDIN)); // Get the user's input

    if ((int)$userAnswer === $correctAnswer) {
        echo "Correct!\n";
    } else {
        echo "Incorrect! The correct answer is $correctAnswer.\n";
    }
}

$operations = ['+', '-', '*'];

// Ask 5 questions to the user
for ($i = 0; $i < 5; $i++) {
    $operation = $operations[array_rand($operations)]; // Pick a random operation
    askMathQuestion($operation);
}