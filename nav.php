<?php 
  session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>PHP To Do</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="styles.css" type="text/css" />
  </head>
  <body>
    <nav>
      <div class="nav-wrapper teal">
        
        <a href="index.php" class="brand-logo">To Do <i class="large material-icons">list</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down light-text">
          <li><a href="index.php">Home</a></li>
        </ul>
      </div>
    </nav>