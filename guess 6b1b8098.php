<!DOCTYPE html>
<html>
<head>
<title><h1>Abhishek Kumar Gupta 6b1b8098</h1></title>
</head>
<body>
<h1 name="6b1b8098">Welcome to my guessing game</h1>
  <h1>6b1b8098</h1>
  <h2>Abhishek kUmar Gupta</h2>
<p>
<?php
  if ( !isset($_GET['guess']) ) { 
    echo("Missing guess parameter");
  } else if ( strlen($_GET['guess']) < 1 ) {
    echo("Your guess is too short");
  } else if ( !is_numeric($_GET['guess']) ) {
    echo("Your guess is not a number");
  } else if ( $_GET['guess'] < 76 ) {
    echo("Your guess is too low");
  } else if ( $_GET['guess'] > 76 ) {
    echo("Your guess is too high");
  } else {
    echo("Congratulations - You are right");
  }
?>
</p>
</body>
</html>
