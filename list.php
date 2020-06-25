<?php 
$items;
if (isset($_SESSION['todo_list'])) {
  $items = $_SESSION['todo_list'];
}

if (isset($_GET['delete'])) {
    $index = htmlspecialchars($_GET['delete']);
    unset($_SESSION['todo_list'][$index]);
    header('Location:index.php'); 
}

if (isset($_GET['update'])) {
  $key = htmlspecialchars($_GET['update']);
  $_SESSION['todo_list'][$key]['done'] = !$_SESSION['todo_list'][$key]['done'];
  header('Location:index.php');
}


$test = [['item'=>'buy something','done'=>true]]

?>

<ul class="collection">
  <?php if (isset($items)):?>
    <?php foreach ($items as $key=>$item):?>
    <li class="collection-item"><div>   
  
  <input type="checkbox" onclick=updateCheck(<?php echo $key ?>) id="<?php echo htmlspecialchars($item['item']);  ?>" name="done" <?php echo $item['done'] ? 'checked' : '' ?>>
  <label for="<?php echo htmlspecialchars($item['item']); ?>" class="black-text format-strikethrough"><?php echo htmlspecialchars($item['item']); ?></label>

<a href="index.php?delete=<?php echo htmlspecialchars($key); ?>" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
  <?php endforeach; ?>
  <?php endif; ?>



</ul>
