<?php
 class Product {

    //private $shape;
    private $price;
    //private $area;

    public function __construct($price){
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        return $this->price = $price;
    }
    
    public function setTrue(){
        return true;
    }

   public function sluggify($string, $separator = '-', $maxLength = 96)
    {
      // https://jtreminio.com/2013/03/unit-testing-tutorial-part-2-assertions-writing-a-useful-test-and-dataprovider/
        $title = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $title = preg_replace("%[^-/+|\w ]%", '', $title);
        $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
        $title = preg_replace("/[\/_|+ -]+/", $separator, $title);

        return $title;
    }

}

/* create  object of product with parameter
 * shape
 * dimensions
 */
//$product = new Product();
//$product = new Product('c', 2);
//$product = new Product('r', 3, 4);

// Set price for product
//$product->setPrice(2.5);

//echo 'Product Price = $' . $product->getPrice();
// calculate price for product
//echo '<br>Product Calculated Price = $' . $product->calcPrice();




