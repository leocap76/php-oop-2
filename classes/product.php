<?php 

    class Product {
    public $model;
    public $brand;

    function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
    public function InfoProduct()
    {
        return $this->brand. " ".$this->model;
    }
}

?>