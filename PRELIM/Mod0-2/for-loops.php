<?php
$price = 2.99;
?>
<?php require_once 'includes/header.php'; ?>

<h2>Prices for Multiple Packs</h2>
<p>
  <?php
  for ($i = 1; $i <= 20; $i++) {
      echo $i;
      echo ' packs cost $';
      echo $price * $i;
      echo '<br>';
  }
  ?>
</p>

<?php include 'includes/footer.php'; ?>
