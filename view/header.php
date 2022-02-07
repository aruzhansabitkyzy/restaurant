<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>McDonald's</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="header">
    <div class="header__container">
        <div class="header__inner">
            <div class="icon">
                <img src="https://1000logos.net/wp-content/uploads/2017/03/McDonalds-logo.png" width="90px" height="50px">
            </div>
        </div>
    </div>
</header>

<h2>Меню</h2>

<div class="options">
    <a href="food-list.php?category=all" id="all"><div class="all active">Все</div></a>
    <a href="food-list.php?category=new" id="new"><div class="new">Новинки</div></a>
    <a href="food-list.php?category=combo" id="combo"><div class="combo">McCombo</div></a>
    <a href="food-list.php?category=sandwiches" id="sandwiches"><div class="sandwiches">Сэндвичи</div></a>
    <a href="food-list.php?category=snacks_sauces" id="snacks_sauces"><div class="snacks_sauces">Закуски и соусы</div></a>
    <a href="food-list.php?category=cold_drink" id="cold_drink"><div class="cold_drink">Холодные напитки</div></a>
    <a href="food-list.php?category=hot_drink" id="hot_drink"><div class="hot_drink">Горячие напитки</div></a>
    <a href="food-list.php?category=dessert" id="dessert"><div class="dessert">Десерты</div></a>
    <a href="food-list.php?category=happy_meal" id="happy_meal"><div class="happy_meal">Хэппи мил</div></a>
</div>

<?php include 'footer.php' ?>
