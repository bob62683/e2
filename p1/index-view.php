<!doctype html>
<html lang='en'>

<head>
    <title>E2 Project 1</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>E2 - Project 1!</h1>
    <h2>Mechanics:</h2>
    <ul>
        <li>Player A Selects a Move to Throw</li>
        <li>Player B Selects a Move to Throw</li>
        <li>A Winner is Declared, or it is a Tie!</li>
    </ul>
    <h2>Results:</h2>
    <?php foreach($results as $key => $result) { ?>
    <ul>
        <li><b>Round # <?php echo $key + 1; ?></b></li>
        <li>Player A threw <?php echo $result['playerA'];?></li>
        <li>Player B threw <?php echo $result['playerB'];?></li>
        <li>Outcome is: <?php echo $result['outcome'];?></li>
    </ul>
    <?php } ?>
</body>

</html>