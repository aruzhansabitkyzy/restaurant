<?php

namespace App;
class FoodInfo
{
    private $id;
    private $category;


    public function getList() {
        //code
    }
    public function category_convert()
    {
        switch ($this->getCategory()) {
            case "all" :
                $str = "Все";
                break;
            case "new" :
                $str = "Новинки";
                break;
            case "combo" :
                $str = "McCombo";
                break;
            case "sandwiches" :
                $str = "Сэндвичи";
                break;
            case "snacks_sauces" :
                $str = "Закуски и соусы";
                break;
            case "cold_drink" :
                $str = "Холодные напитки";
                break;
            case "hot_drink" :
                $str = "Горячие напитки";
                break;
            case "desserts" :
                $str = "Десерты";
                break;
            case "happy_meal" :
                $str = "Хэппи мил";
                break;
            default:
                return "Все";
        }
        return $str;

    }

    public function get_foods_by_category()
    {
        global $connection;
        $conv_category = $this->category_convert();
        $query = mysqli_query($connection, "SELECT * FROM menu WHERE category = '$conv_category'");
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $result;
    }
//
//    public function add_foods($category, $food_name, $price, $url)
//    {
//        global $connection;
//        mysqli_query($connection, "INSERT INTO menu(food_name, price, category, url) values($food_name, $price, $category, $url)");
//        return "Success";
//    }
//
//    public function delete_foods($food_id)
//    {
//        global $connection;
//        mysqli_query($connection, "DELETE FROM menu WHERE food_id=$food_id");
//        return $food_id . " is deleted";
//    }
//
//    public function update_price($food_id, $price)
//    {
//        global $connection;
//        mysqli_query($connection, "UPDATE menu SET price = $price WHERE food_id=$food_id");
//        return "Updated";
//    }

    public function get_foods_by_id($food_id): array
    {
        global $connection;
        $query = mysqli_query($connection, "SELECT * FROM menu WHERE food_id = '$food_id'");
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $result;
    }

    public function getFoodId()
    {
        return $this->id;
    }
    public function getCategory() {
        return $this->category;
    }
    public function setCategory($category) {
        $this->category=$category;
    }
    public function setFoodId($id) {
        $this->id=$id;
    }

}