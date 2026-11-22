<?php
$products = [
    'Toffee'       => 2.99,
    'Mints'        => 1.99,
    'Fudge'        => 3.49,
    'Gummy Bears'  => 2.49,
    'Lollipops'    => 0.99,
];

$best_sellers = ['Toffee', 'Mints', 'Fudge', 'Gummy Bears', 'Lollipops'];
?>
<?php require_once 'includes/header.php'; ?>

<h2>Price List</h2>
<table>
  <tr>
    <th>Item</th>
    <th>Price</th>
  </tr>
  <?php foreach ($products as $item => $price) { ?>
    <tr>
      <td><?= $item ?></td>
      <td>$<?= $price ?></td>
    </tr>
  <?php } ?>
</table>

<h2>Best Sellers</h2>
<?php foreach ($best_sellers as $candy) { ?>
  <p><?= $candy ?></p>
<?php } ?>

<?php include 'includes/footer.php'; ?>
