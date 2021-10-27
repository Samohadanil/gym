<?php

require_once "Interfaces/CarInterface.php";

class ModelsController implements CarInterface
{
    public function getModels($date)
    {
        $array = self::MODELS[$date];
        echo json_encode($array);
    }
}

if (isset($_GET['brand_id']) && isset($_GET['show_brand'])) {
    $cars = new ModelsController;
    $cars->getModels($_GET['brand_id']);
}
