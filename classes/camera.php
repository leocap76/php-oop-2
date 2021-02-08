<?php 

    require_once __DIR__. "/product.php";

    class Camera extends Product  {

        public $price;
        
        function __construct($brand, $model, $price)
        {
            parent::__construct($brand, $model);
            $this->price = $price;
        }
        public function Price()
        {
            return $this->price;
        }

    }

?>