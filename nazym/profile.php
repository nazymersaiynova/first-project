<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизация және регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- Профиль -->

    <form class="profile-form">
        <img class="avatar" src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="Avatar">
        <h2 class="full-name"><?= $_SESSION['user']['full_name'] ?></h2>
        <a class="email" href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="maps.php" class="maps-link">Картаға өтіңіз</a>
        <a href="vendor/logout.php" class="logout-link">Шығу</a>

    </form>

</body>

</html>