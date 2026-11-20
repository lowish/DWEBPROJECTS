<?php
$packs = 10;
$price = 2.99;
?>
<?php require_once 'includes/header.php'; ?>

<h2>Prices for Multiple Packs</h2>
<p>
  <?php
  do {
      echo $packs;
      echo ' packs cost $';
      echo $packs * $price;
      echo '<br>';
      $packs--;
  } while ($packs > 0);
  ?>
</p>

<?php include 'includes/footer.php'; ?>
