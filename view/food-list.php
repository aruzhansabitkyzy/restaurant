<?php
declare(strict_types=1);
require_once '../vendor/autoload.php';
use App\FoodInfo;
include 'header.php';
require '../model/database.php';
  if(empty($_GET['category'])) {
      $category =  'all';
  }
  else {
      $category = $_GET['category'];
  }
  $client = new FoodInfo;
  $client->setCategory($category);
  session_start();
  $_SESSION['category'] = $category;

?>

<section id="list" class="list">
    <div class="food-list">
        <?php if($client->get_foods_by_category()) { ?>
        <?php  $result = $client->get_foods_by_category(); ?>
        <?php foreach($result as $food): ?>
            <form action="order.php" method="post" >
                <input type="hidden" name="selected" value="<?php $_SESSION['id']; ?>">
                <a href="order.php">
                    <?php $client->setFoodId($food['food_id']); ?>
                    <div class="food">
                        <img src="<?php echo $food['image']?>" width="400px" alt="test">
                        <p><?= $food['food_name'] ?></p>
                    </div>
                </a>
            </form>
        <?php endforeach;?>
        <?php } else { ?>
        <p>No food is available</p>
        <?php } ?>
    </div>
</section>
<?php include 'footer.php'; ?>
