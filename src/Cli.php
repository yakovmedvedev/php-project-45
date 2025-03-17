<?php


namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function greet_user() {
    line("Hello, this is the brain-games!");
    $name = prompt("What's your name?");
    line("Hello, $name!");
}

// greet_user();
