<?php

// CLI-game. Greeting a user


 namespace BrainGames\Cli;

 use BrainGames\Engine;

 use function BrainGames\Engine\greetUser;

//Game logic
function runBrainGame(): void
{
    greetUser();
}
