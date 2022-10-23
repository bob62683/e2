<?php 

session_start();

$moves = ['Rock', 'Paper', 'Scissors', 'Lizard', 'Spock'];

//Build Winning moves array of arrays
$winningMoves=[
    $winningMove01 = ['PlayerA' => 'Scissors', 'PlayerB' => 'Paper'],
    $winningMove02 = ['PlayerA' => 'Paper', 'PlayerB' => 'Rock'],
    $winningMove03 = ['PlayerA' => 'Rock', 'PlayerB' => 'Lizard'],
    $winningMove04 = ['PlayerA' => 'Rock', 'PlayerB' => 'Scissors'],
    $winningMove05 = ['PlayerA' => 'Lizard', 'PlayerB' => 'Spock'],
    $winningMove06 = ['PlayerA' => 'Spock', 'PlayerB' => 'Scissors'],
    $winningMove07 = ['PlayerA' => 'Scissors', 'PlayerB' => 'Lizard'],
    $winningMove08 = ['PlayerA' => 'Lizard', 'PlayerB' => 'Paper'],
    $winningMove09 = ['PlayerA' => 'Paper', 'PlayerB' => 'Spock'],
    $winningMove10 = ['PlayerA' => 'Spock', 'PlayerB' => 'Rock']
];

$name = $_POST['name'];
$playerA = $_POST['throw'];
$playerB = $moves[rand(0, 4)];
$thrown = [$playerA, $playerB];

//Compare Player A move vs Player B Move
//If Player A and Player B throw same move, declare a tie
//Else, name a winnner

if ($playerA == $playerB) {
    $outcome="Tie!";
} else {
    foreach ($winningMoves as $row => $innerWinningMoves) {
        if ($innerWinningMoves['PlayerA']==$playerA && $innerWinningMoves['PlayerB']==$playerB) {
            $outcome="$name Wins!";
            break;
        } else {
            $outcome="$name's Opponent Wins!";
        }
    }
}

$_SESSION['results'] = [
    'playerA' => $playerA,
    'playerB' => $playerB,
    'name' => $name,
    'outcome' => $outcome
];

header('Location: /');