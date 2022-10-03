<?php 
$moves = ['Rock', 'Paper', 'Scissors', 'Lizard', 'Spock'];

for($i=0; $i<10; $i++) {
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

    $thrown = ['PlayerA' => $moves[rand(0, 4)], 'PlayerB' => $moves[rand(0, 4)]];

    //+ Compare Player A move vs Player B Move
    //+ If Player A and Player B throw same move, declare a tie
    //+ Else, name a winnner

    if ($thrown['PlayerA'] == $thrown['PlayerB']) {
        $outcome="Tie!";
    } else {
        foreach ($winningMoves as $row => $innerWinningMoves) {
            if ($innerWinningMoves['PlayerA']==$thrown['PlayerA'] && $innerWinningMoves['PlayerB']==$thrown['PlayerB']) {
                $outcome="Player A Wins";
                break;
            } else {
                $outcome="Player B Wins";
            }
        }
    }
    $results[] = [
        'playerA' => $thrown['PlayerA'],
        'playerB' => $thrown['PlayerB'],
        'outcome' => $outcome
    ];
}
require 'index-view.php';?>