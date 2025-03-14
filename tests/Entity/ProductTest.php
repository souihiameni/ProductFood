<?php
namespace App\Tests\Entity;
use App\Entity\Product;
use PHPUnit\Framework\TestCase;
class ProductTest extends TestCase{
    public function testDefault(){
        $product=new Product('pomme','food',1);
        $this->assertSame(0.055,$product->computeTVA());
    }
    public function testDef(){
        $product=new Product('pomme','mekla',1);
        $this->assertSame(0.196,$product->computeTVA());
    }
    public function testInvalidPrice(){
        $p=new Product('pomme','food',-5);
        $this->expectException('Exception');
        $p->computeTVA();
    }
    /**
     * @dataProvider pricesForFood
     */
    public function testMultiFood($prix,$tva){
        $p=new Product ('prod','food',$prix);
        $this->assertSame($tva,$p->computeTVA());
    }
    public function pricesForFood(){
        return[[0,0.0],[1,0.055],[10,0.55],[20,1.1]];
    }
}
?>