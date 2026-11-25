<?php
$price = 1;
?>
<?php require_once 'includes/header.php'; ?>

<h2>Bulk Packs</h2>
<p>
  <?php
  for ($i = 10; $i <= 200; $i = $i + 10) {
      echo $i;
      echo ' packs cost $';
      echo $price * $i;
      echo '<br>';
  }
  ?>
</p>

<?php include 'includes/footer.php'; ?>
