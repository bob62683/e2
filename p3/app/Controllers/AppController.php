<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $results = $this->app->old('results');
        $playerA = $this->app->old('playerA');
        $playerB = $this->app->old('playerB');
        $name = $this->app->old('name');
        $outcome = $this->app->old('outcome');

        return $this->app->view('index', [
            'results' => $results,
            'playerA' => $playerA,
            'playerB' => $playerB,
            'name' => $name,
            'outcome' => $outcome
        ]);
    }

    /**
     * This method is triggered by the route "/process"
     */
    public function process()
    {
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

        $playerA = $this->app->input('throw');
        $playerB = $moves[rand(0, 4)];
        $name = $this->app->input('name');
        $thrown = [$playerA, $playerB];

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

        return $this->app->redirect('/', [
            'results' => true,
            'playerA' => $playerA,
            'playerB' => $playerB,
            'name' => $name,
            'outcome' => $outcome
        ]);
    }

    
}