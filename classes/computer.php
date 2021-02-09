<?php 

    require_once __DIR__. "/product.php";

    class Computer extends Product  {

        public $price;
        
        function __construct($brand, $model, $price)
        {
            parent::__construct($brand, $model);
            $this->price = $price;
        }
        public function getPrice()
        {
            return $this->price;
        }

    }

?>