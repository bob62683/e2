<!doctype html>
<html lang='en'>

<head>
    <title>E2 - Project 2</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <link rel='stylesheet' href='styles/style.css'>
</head>

<body>

    <header>
        <h1>E2 - Project 2</h1>
    </header>

    <main>
        <h2>Rock, Paper, Scissors, Lizard, Spock!</h2>
        <p><img src='images/RPSLS.webp' alt='Rock, Paper, Scissors, Lizard, Spock!'></p>

        <form method='POST' action='process.php'>
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

        <?php if (isset($results)) { ?>
        <section>
            <h2>Results:</h2>
            <ul>

                <li><?php echo $name;?> threw <b><?php echo $playerA;?></b>!</li>
                <li><?php echo $name;?>'s Opponent threw <b><?php echo $playerB;?></b>!</li>
                <li>Outcome is: <b><?php echo $outcome;?></b></li>
            </ul>
        </section>
        <?php } ?>

    </main>

    <footer></footer>

</body>

</html>