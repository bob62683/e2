@extends('templates/master')

@section('content')

<h2><a class='navlink' href="/">Home</a> > Game History - Rock, Paper, Scissors, Lizard, Spock!</h2>

<section>
    <ul>
        @foreach ($rpslsResults as $rpslsResult)
        <li>Round ID: {{ $rpslsResult['id'] }}</li>
        <li>{{ $rpslsResult['name'] }}'s Throw: {{ $rpslsResult['thrown'] }}</li>
        <li>Outcome: {{ $rpslsResult['outcome'] }}</li>
        <li>Timestamp: {{ $rpslsResult['timestamp'] }}</li>
        <br />
        @endforeach
    </ul>
</section>

<footer></footer>

@endsection