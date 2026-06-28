<?php
$title = 'Mijn eerste PHP-pagina';
$name = 'student';
?>
<!doctype html>
<html lang="nl">
<head><meta charset="utf-8"><title><?= htmlspecialchars($title) ?></title></head>
<body>
  <h1><?= htmlspecialchars($title) ?></h1>
  <p>Welkom, <?= htmlspecialchars($name) ?>.</p>
  <p>Vandaag is het <?= date('d/m/Y') ?>.</p>
</body>
</html>
