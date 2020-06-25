<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"
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