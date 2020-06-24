<?php
$error = '';
//Start a global session to store our list
if (isset($_GET['submit'])) {
  //Check we don't have an empty string
  if (strlen($_GET['item']) > 0) {
    //Store our submission in variable
    $item = $_GET['item'];
    if (isset($_SESSION['todo_list'])) {
      $newArray = array_push($_SESSION['todo_list'],$item);
      
    } else {
    $_SESSION['todo_list'] = [$item];
    }
  } else {
    $error = 'You must add something in the item box';
  }

  
}

?>

<form action="index.php" method="GET">
          <input type="text" name="item" placeholder="Buy lemons">
          <label for="error" class="red-text"><?php echo $error ?></label><br />
          <label for="autocomplete-input">Add a new item</label>
          

          <div class="spacer"></div>
          <input type="submit" name="submit" value="submit" class="btn">
</form>