<?php

require_once "Interfaces/CarInterface.php";

class CarsController implements CarInterface
{
    public function getCars($model)
    {
       $cars = self::CARS[$model];
       echo json_encode($cars);
    }
}

if (isset($_GET['show_brand']) && isset($_GET['model'])) {
    $cars = new CarsController;
    $cars->getCars($_GET['model']);
}