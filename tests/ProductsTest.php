<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
//use Product;
require_once 'src\product.php';
final class ProductsTest extends TestCase {

    public $product;
    
    public function __construct(){
        $this->product = new Product(3);
    }
    public function testPrice() {
        
        
        $this->assertEquals(3, $this->product->getPrice(3));
    }
    
    public function testTrue(){
        $this->assertTrue($this->product->setTrue(), 'True assertion test');
    }
    
     public function testSluggifyReturnsSluggifiedString()
    {
        $originalString = 'This+string-will be/ sluggified';
        $expectedResult = 'this-string-will-be-sluggified';
        $result = $this->product->sluggify($originalString, '-');
        $this->assertEquals($expectedResult, $result);
    }

}
