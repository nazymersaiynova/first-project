<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизация және регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- Форма регистрации -->
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Аты-жөн</label>
        <input type="text" name="full_name" placeholder="Толық атыңызды енгізіңіз">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Логинді енгізіңіз">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Пошта мекенжайын енгізіңіз">
        <label>Профильге арналған сурет</label>
        <input type="file" name="avatar">
        <label>Құпиясөз</label>
        <input type="password" name="password" placeholder="Құпия сөзді енгізіңіз">
        <label>Құпиясөзді растау</label>
        <input type="password" name="password_confirm" placeholder="Құпия сөзді растаңыз">
        <button type="submit">Кіру</button>
        <p>
            Сізде есептік жазба бар ма?- <a href="/">авторизациядан өту</a>!
        </p>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            unset($_SESSION['message']);
        }
        ?>
    </form>

</body>

</html>