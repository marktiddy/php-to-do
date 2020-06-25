<?php
$error = '';
//Start a global session to store our list
if (isset($_GET['submit'])) {
  //Check we don't have an empty string
  if (strlen($_GET['item']) > 0) {
    //Store our submission in variable
    $item = $_GET['item'];
    $newArr = ['item'=>$item,'done'=>false];
    if (isset($_SESSION['todo_list'])) {
      $newArray = array_push($_SESSION['todo_list'],$newArr);
      
    } else {
    $_SESSION['todo_list'] = [$newArr];
    }
  } else {
    $error = 'You must add something in the item box';
  }

  //$test = [['item'=>'buy something','done'=>true]]

}

?>

<form action="index.php" method="GET">
          <input type="text" name="item" placeholder="Buy lemons">
          <label for="error" class="red-text"><?php echo $error ?></label><br />
          <label for="autocomplete-input">Add a new item</label>
          

          <div class="spacer"></div>
          <input type="submit" name="submit" value="submit" class="btn">
</form>