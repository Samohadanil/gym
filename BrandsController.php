<?php

require_once "Interfaces/CarInterface.php";

class BrandsController implements CarInterface
{
    public function getBrands($type)
    {
        $array = self::BRANDS[$type];
        echo json_encode($array);
    }
}

if (isset($_GET['type_id']) && isset($_GET['show_type'])) {
    $cars = new BrandsController;
    $cars->getBrands($_GET['type_id']);

}
