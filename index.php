<?php

session_start();

$_SESSION['user'] = 'admin';
$_SESSION['roles'] = ['administrator', 'approver', 'editor'];

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php if (isset($_SESSION['user'])) : ?>
        <p>Welcome <?php echo $_SESSION['user'] ?></p>
    <?php endif ?>
    
    <?php if (isset($_SESSION['roles'])) : ?>
        <p>Current roles</p>
        <ul>
            <?php foreach ($_SESSION['roles'] as $role): ?>
                <li><?php echo $role ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
</body>
</html>
