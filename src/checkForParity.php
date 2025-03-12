<?php

namespace BrainGames\checkForParity;

// Function to prompt user and get input
function promptUser($prompt) {
    echo $prompt;
    $input = fgets(STDIN);
    return trim($input);
}

// Function to check if a number is even
function isEven($number) {
    return $number % 2 === 0;
}

// Main game execution
echo "Welcome to the Brain Games!\n";

// Get the user's name
$name = promptUser("May I have your name? ");
echo "Hello, $name!\n";

$correctAnswers = 0; // Initialize correct answer counter

while ($correctAnswers < 3) {
    // Generate a random number between 1 and 100
    $number = rand(1, 100);
    $correctAnswer = isEven($number) ? 'yes' : 'no'; // Determine correct answer

    // Ask the user for their answer
    echo "Question: $number\n";
    $userAnswer = promptUser('Your answer: ');

    // Check if the user's answer is correct
    if ($userAnswer === $correctAnswer) {
        echo "Correct!\n";
        $correctAnswers++;
    } else {
        echo "'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.\n";
        echo "Let's try again, $name!\n";
        // Reset correct answers counter
        $correctAnswers = 0;
    }
}

// If the user answers correctly three times in a row
echo "Congratulations, $name!\n";