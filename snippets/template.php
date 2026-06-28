<?php
$pageTitle = 'Producten';
$products = ['Boek', 'Ticket', 'Workshop'];
include __DIR__ . '/partials/header.php';
?>
<h1><?= htmlspecialchars($pageTitle) ?></h1>
<ul>
<?php foreach ($products as $product): ?>
  <li><?= htmlspecialchars($product) ?></li>
<?php endforeach; ?>
</ul>
<?php include __DIR__ . '/partials/footer.php'; ?>
