<?php


function askMathQuest()
{
    $number1 = rand(0, 100);
    print_r($number1 . "\n");
    $number2 = rand(0, 100);
    print_r($number2 . "\n");
//    $answer = $number1 + $number2;
//    $answer = $number1 - $number2;
    $operation = array("+", "-", "*");
//    $randOperation = array_rand($operation, 1);
//    print_r($randOperation . "\n");

    print_r($answer);

    switch ($operation[array_rand($operation)]) {
        case '+':
            $answer = $number1 + $number2;
            break;
            case '-':
                $answer = $number1 - $number2;
                break;
                case '*':
                    $answer = $number1 * $number2;
                    break;
    }
    echo "What is $number1 $operation $number2? ";
    print_r($answer . "\n");
}$operations = ['+', '-', '*'];
askMathQuest();

