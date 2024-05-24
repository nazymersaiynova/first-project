<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MapStart</title>
    <link rel="stylesheet" href="assets/css/sstyle.css">
</head>

<body>

<nav class="navbar">
    <div class="logo">
        <a href="#">MapStart</a>
    </div>
    
    <div class="search-bar">
        <input type="text" id="search-input" placeholder="Іздеу...">
        <button type="submit" id="search-button">Іздеу</button>
    </div>

    <ul class="nav-links">
        <li><a href="menu/taular.html">Таулар</a></li>
        <li><a href="menu/trc.html">Ойын-сауық орталығы</a></li>
        <li><a href="menu/park.html">Саябақ</a></li>
        <li><a href="menu/muzei.html">Музей</a></li>
        <li><a href="menu/sport.html">Спорт кешені</a></li>
        <li><a href="menu/akvapark.html">Аквопарк</a></li>
    </ul>
    
    <a href="profile.php" class="order-button">Шығу</a>
    <div class="mobile-menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>

<div class="map-container"> 
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d186209.11469466548!2d76.7050624!3d43.177653!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2skz!4v1716116811267!5m2!1sru!2skz" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
</div>

<div class="share-buttons">
    <h2>Бөлісу</h2>
    <a href="https://www.instagram.com/" target="_blank">
        <img src="instagram.png" alt="Instagram">
    </a>
    <a href="https://web.whatsapp.com/" target="_blank">
        <img src="whatsapp.png" alt="WhatsApp">
    </a>
    <a href="https://web.telegram.org/k/" target="_blank">
        <img src="telegram.png" alt="Telegram">
    </a>
</div>

<script>
    document.getElementById('search-button').addEventListener('click', function() {
        const query = document.getElementById('search-input').value;
        const url = `https://2gis.kz/almaty/search/${encodeURIComponent(query)}`;
        window.location.href = url;
    });

    document.getElementById('search-input').addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            const query = document.getElementById('search-input').value;
            const url = `https://2gis.kz/almaty/search/${encodeURIComponent(query)}`;
            window.location.href = url;
        }
    });
</script>



</body>

</html>


