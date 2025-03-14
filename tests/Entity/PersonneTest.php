<?php
namespace App\Tests\Entity;
use App\Entity\Personne;
use PHPUnit\Framework\TestCase;
class PersonneTest extends TestCase{
    public function testCategorie(){
        $p1=new Personne('ameni','souihi',21);
        $this->assertSame('majeur',$p1->categorie());}
        public function testcat(){
        $p2=new Personne('asma','souihi',16);
        $this->assertSame('mineur',$p2->categorie());
    }
    public function testInvalidee(){
        $p=new Personne('ameni','souihi',-1);
        $this->expectException('Exception');
        $p->categorie();
    }
    /**
     * @dataProvider person
     */
    public function testPer($cat,$age){
        $per=new Personne ('ahmed','mhadhbi',$age);
        $this->assertSame($cat,$per->categorie());
    }
    public function person(){
        return[['majeur',19],['majeur',20],['mineur',5],['mineur',6]];
    }

}
?>