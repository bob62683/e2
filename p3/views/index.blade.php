@extends('templates/master')

@section('content')

<h2>Rock, Paper, Scissors, Lizard, Spock!</h2>
<p><img src='images/RPSLS.webp' alt='Rock, Paper, Scissors, Lizard, Spock!'></p>
@if ($app->errorsExist())
<div class='alert alert-danger'>
    <p>Name is required!</p>
</div>
@endif
<form method='POST' action='/process'>
    <label for='name'>Name:</label><input type='text' id='name' name='name'
        value='<?php echo (!isset($name)) ? 'Player A' : $name ?>'><br /><br />
    <div>
        <h3><b>Instructions:</b></h3>
        <p>Choose your weapon and fight. Based on what your opponent chooses, a winner will be determined or it
            will be a tie.</p>
    </div>
    <input type='radio' id='Rock' name='throw' value='Rock'
        <?php echo (!isset($playerA) or $playerA == 'Rock') ? 'checked' : ''?>><label for='Rock'>Rock</label>
    <input type='radio' id='Paper' name='throw' value='Paper'
        <?php echo (isset($playerA) and $playerA == 'Paper') ? 'checked' : ''?>><label for='Paper'>Paper</label>
    <input type='radio' id='Scissors' name='throw' value='Scissors'
        <?php echo (isset($playerA) and $playerA == 'Scissors') ? 'checked' : ''?>><label
        for='Scissors'>Scissors</label>
    <input type='radio' id='Spock' name='throw' value='Spock'
        <?php echo (isset($playerA) and $playerA == 'Spock') ? 'checked' : ''?>><label for='Spock'>Spock</label>
    <input type='radio' id='Lizard' name='throw' value='Lizard'
        <?php echo (isset($playerA) and $playerA == 'Lizard') ? 'checked' : ''?>><label
        for='Lizard'>Lizard</label><br /><br />
    <button type='submit'><?php echo (isset($outcome)) ? 'Fight Again!' : 'Fight!'?></button>
</form>
<div><a class='navlink' href='/history'>Game History</a></div>

@if ($results)
<section>
    <h2>Results:</h2>
    <ul>

        <li>{{ $name }} threw <b>{{ $playerA }}</b>!</li>
        <li>{{ $name }}'s Opponent threw <b>{{ $playerB }}</b>!</li>
        <li>Outcome is: <b>{{ $outcome }}</b></li>
    </ul>
</section>
@endif
<footer></footer>

@endsection