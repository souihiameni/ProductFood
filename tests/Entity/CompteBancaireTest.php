<?php
namespace App\Tests\Entity;
use App\Entity\CompteBancaire;
use PHPUnit\Framework\TestCase;
class CompteBancaireTest extends TestCase{
    public function testDefa(){
        $CompteBancaire=new CompteBancaire('ameni',20);
        $this->assertSame(10.0,$CompteBancaire->retourner(10));
    }
        public function testInvalidee(){
            $p=new CompteBancaire('asma',19);
            $this->expectException('exception');
            $p->retourner(20);
    }
    /**
     * @dataProvider carte
     */
    public function testCarte($solde,$montant){
        $carte=new CompteBancaire ('ameni',$solde);
        $this->assertSame($montant,$carte->retourner(20.00));
    }
    public function carte(){
        return[[50.00,30.00],[34.00,14.00],[45.00,25.00],[26.00,6.00]];
    }
}
    
?>