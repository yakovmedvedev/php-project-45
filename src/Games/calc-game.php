<?php

namespace BrainGames\Games\CalcGame;

use function cli\line;
use function cli\prompt;
use BrainGames\Engine;

// require_once(__DIR__ . '/../engine.php'); // Require the engine file

function mathOper() {
    $name = Engine\startGame("Welcome to the Brain Games!", "May I have your name?", 'mathOper');
    line("What is the result of the expression?");
    
    $operations = ['+', '-', '*'];

    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
        $operation = $operations[array_rand($operations)];
        
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
                throw new \Exception("Invalid operation");
        }

        $question = "$number1 $operation $number2";
        Engine\askQuestion($question, (string) $correctAnswer, $name);
    }

    Engine\finishGame($name);
}

// mathOper();
