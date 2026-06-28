<?php
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $name === '' ? 'Vul je naam in.' : 'Bedankt, ' . htmlspecialchars($name) . '!';
}
?>
<form method="post">
  <label>Naam <input name="name" value="<?= htmlspecialchars($name) ?>"></label>
  <label>E-mail <input name="email" value="<?= htmlspecialchars($email) ?>"></label>
  <button type="submit">Verstuur</button>
</form>
<p><?= $message ?></p>
