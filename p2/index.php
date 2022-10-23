<?php 
session_start();

if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $playerA= $results['playerA'];
    $playerB= $results['playerB'];
    $name= $results['name'];
    $outcome= $results['outcome'];

    $_SESSION['results'] = null;
}

require 'index-view.php';