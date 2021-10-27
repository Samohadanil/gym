<?php
interface CarInterface {
    public const TYPE = [
        1 => "Cars",
        2 => "Trucks"
    ];

    public const BRANDS = [
        1 => ["BMW", "Audi", "Mercedes"],
        2 => ["DAF", "MAN"]
    ];

    public const MODELS = [
        "BMW" => ["X4", "X5", "X6"],
        "Audi" => ["A6", "A7", "A8"],
        "Mercedes" => ["C-class", "E-class", "S-class"],
        "DAF" => ["XF"],
        "MAN" => ["TGX", "TGS"]
    ];

    public const CARS = [
        "X4" => ["X4M 2015", "X4 2016", "X4 2018"],
        "X5" => ["X5 2017", "X5 2021", "X5M 2008"],
        "X6" => ["X7 2019", "X7 2018", "X7M 2020"],
        "A6" => ["A6 Supercharged", "A6 Prestige"],
        "A7" => ["A7 stage1", "A7 2018"],
        "A8" => ["A8 Long edition", "A8 2018"],
        "C-class" => ["C-200", "C-250", "C300"],
        "E-class" => ["E200", "E250", "E450"],
        "S-class" => ["S-350", "S550", "S63 AMG"],
        "XF" => ["XF-85", "XF-95"],
        "TGX" => ["TGX 111", "TGX 222"],
        "TGS" => ["TGS 001", "TGS 002"]
     ];

    //public function getCars($model);

   // public function getModels($date);

   // public function getBrands($type);

   // public function getType();
}