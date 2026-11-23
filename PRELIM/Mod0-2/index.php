<?php
// Visitor greeting (if statement)
$name = 'Prince Tan';
$greeting = 'Hello';
if ($name) {
    $greeting = 'Welcome back, ' . $name;
}

// Product prices and stock (associative arrays)
$prices = [
    'Chocolate'      => 45.00,
    'Gummy Bears'    => 35.00,
    'Lollipops'      => 15.00,
    'Candy Canes'    => 20.00,
    'Toffee'         => 30.00,
    'Marshmallows'   => 40.00,
];

$stock = [
    'Chocolate'      => 25,
    'Gummy Bears'    => 8,
    'Lollipops'      => 0,
    'Candy Canes'    => 12,
    'Toffee'         => 3,
    'Marshmallows'   => 0,
];

// Best sellers (indexed array)
$best_sellers = ['Chocolate', 'Gummy Bears', 'Candy Canes'];

// Bulk pricing and budget
$pack_price = 45.00;
$budget = 300.00;
$packs = 0;
$total = 0;
while ($total + $pack_price <= $budget) {
    $total = $total + $pack_price;
    $packs++;
}
?>
<?php require_once 'includes/header.php'; ?>

<h2><?= $greeting ?></h2>

<h2>Our Candy</h2>
<table>
  <tr>
    <th>Candy</th>
    <th>Price</th>
    <th>Stock</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <?php foreach ($prices as $item => $price) { ?>
    <?php
    $qty = $stock[$item];
    if ($qty >= 10) {
        $message = 'Good availability';
    } elseif ($qty > 0) {
        $message = 'Low stock';
    } else {
        $message = 'Out of stock';
    }
    $action = ($qty > 0) ? 'Add to cart' : 'More stock coming soon';
    ?>
    <tr>
      <td><?= $item ?></td>
      <td>₱<?= number_format($price, 2) ?></td>
      <td><?= $qty ?></td>
      <td><?= $message ?></td>
      <td><?= $action ?></td>
    </tr>
  <?php } ?>
</table>

<h2>Best Sellers</h2>
<?php foreach ($best_sellers as $rank => $candy) { ?>
  <p>#<?= $rank + 1 ?> <?= $candy ?></p>
<?php } ?>

<h2>Chocolate Prices</h2>
<table>
  <tr>
    <th>Packs</th>
    <th>Total</th>
  </tr>
  <?php for ($i = 10; $i <= 50; $i = $i + 10) { ?>
    <tr>
      <td><?= $i ?> packs</td>
      <td>₱<?= number_format($i * $pack_price, 2) ?></td>
    </tr>
  <?php } ?>
</table>


<?php include 'includes/footer.php'; ?>
