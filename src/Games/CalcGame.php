<?php

//CLI-game. Math operations

namespace BrainGames\Games\CalcGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

const MIN_NUMBER_VALUE = 1;
const MAX_NUMBER_VALUE = 10;

function calculate(int $numberOne, int $numberTwo, string $operation): int
{
    $rightAnswer = 0;
    switch ($operation) {
        case '+':
            $rightAnswer = $numberOne + $numberTwo;
            break;
        case '-':
            $rightAnswer = $numberOne - $numberTwo;
            break;
        case '*':
            $rightAnswer = $numberOne * $numberTwo;
            break;
        default:
            break;
    }
    return $rightAnswer;
}

function runCalculationGame(): void
{
    $description = "What is the result of the expression?";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        $operators = ['+', '-', '*'];
        $operatorsRandomKey = array_rand($operators);
        $operation = $operators[$operatorsRandomKey];
        $numberOne = random_int(MIN_NUMBER_VALUE, MAX_NUMBER_VALUE);
        $numberTwo = random_int(MIN_NUMBER_VALUE, MAX_NUMBER_VALUE);

        $rightAnswer = (string) calculate($numberOne, $numberTwo, $operation);
        $question = "{$numberOne} {$operation} {$numberTwo}";
        $data[$question] = $rightAnswer;
    }
    runEngine($description, $data);
}
