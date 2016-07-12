<?php
require_once "app/init.php";
?>
<!DOCTYPE>
<html>

<head>
  <title></title>
</head>

<body>
  <?php if ($fbauth->isLogin()): ?>
    <a href="logout.php">Cerrar sesion</a>
  <?php else: ?>
    <a href="<?= $fbauth->getAuthUrl() ?>">Iniciar sesion</a>
  <?php endif; ?>

</body>

</html>
