<?php
$allowed = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp'];
$file = $_FILES['image'] ?? null;
if ($file && $file['error'] === UPLOAD_ERR_OK) {
    $type = mime_content_type($file['tmp_name']);
    if (!isset($allowed[$type])) die('Ongeldig bestandstype.');
    $name = bin2hex(random_bytes(16)) . '.' . $allowed[$type];
    move_uploaded_file($file['tmp_name'], __DIR__ . '/uploads/' . $name);
}
