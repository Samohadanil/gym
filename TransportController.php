<?php
require_once "Interfaces/CarInterface.php";

class TransportController implements CarInterface
{
    public function getType()
    {
        $array = self::TYPE;
        return $array;
    }

    public function getBrands($type)
    {
        $array = self::BRANDS[$type];
        echo json_encode($array);
    }

    public function getModels($date)
    {
        $array = self::MODELS[$date];
        echo json_encode($array);
    }

    public function getCars($model)
    {
       $cars = self::CARS[$model];
       echo json_encode($cars);
    }
}

if (isset($_GET['type_id']) && isset($_GET['show_type'])) {
    $cars = new TransportController;
    $cars->getBrands($_GET['type_id']);
}

if (isset($_GET['brand_id']) && isset($_GET['show_brand'])) {
    $cars = new TransportController;
    $cars->getModels($_GET['brand_id']);
}

if (isset($_GET['show_brand']) && isset($_GET['model'])) {
    $cars = new TransportController;
    $cars->getCars($_GET['model']);
}