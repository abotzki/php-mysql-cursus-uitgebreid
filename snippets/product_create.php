<?php
require __DIR__ . '/../src/db.php';
$errors = [];
$name = trim($_POST['name'] ?? '');
$price = $_POST['price'] ?? '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($name === '') $errors[] = 'Naam is verplicht.';
    if (!is_numeric($price) || $price < 0) $errors[] = 'Prijs moet positief zijn.';
    if (!$errors) {
        $stmt = db()->prepare('INSERT INTO products (name, price) VALUES (:name, :price)');
        $stmt->execute(['name' => $name, 'price' => $price]);
        header('Location: products.php');
        exit;
    }
}
