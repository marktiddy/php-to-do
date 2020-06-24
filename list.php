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

?>

<ul class="collection">
  <?php if (isset($items)):?>
    <?php foreach ($items as $key=>$item):?>
    <li class="collection-item"><div><?php echo htmlspecialchars($item); ?><a href="index.php?delete=<?php echo htmlspecialchars($key); ?>" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
  <?php endforeach; ?>
  <?php endif; ?>
</ul>