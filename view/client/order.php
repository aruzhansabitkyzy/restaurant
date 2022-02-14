<?php
session_start();
require_once '../vendor/autoload.php';
use App\FoodInfo;
require '../model/database.php';
$selected  = $_GET['value'];
$clientObject = new FoodInfo;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order a meal</title>
    <link rel="stylesheet" href="../../css/form.css">
</head>
<body>
    <section class="personal_info">
        <h1>Ваш заказ: </h1>
        <?php $food = $clientObject->get_foods_by_id($selected) ?>
        <?php foreach($food as $item): ?>
           <img src="<?php echo $item['image']?>" width="250px">
           <p><?php echo $item['food_name']?></p>
        <?php endforeach; ?>
        <form action="../../controllers/info.php" method="post">
            <div>
                <label>Имя</label>
                <input type="text" name="name" placeholder="Имя *">
            </div>
            <div>
                <label>Фамилия</label>
                <input type="text" name="surname" placeholder="Фамилия *">
            </div>
            <div>
                <label>Номер телефона</label>
                <input type="text" name="phone" placeholder="Номер телефона *">
            </div>
            <div>
                <label>Адрес</label>
                <input type="text" name="address" placeholder="Адрес *">
            </div>
            <div>
                <label>Количество</label>
                <input type="number" name="quantity">
            </div>
            <div>
                <input type="submit" value="Заказать">
            </div>

        </form>
    </section>
</body>
</html>

