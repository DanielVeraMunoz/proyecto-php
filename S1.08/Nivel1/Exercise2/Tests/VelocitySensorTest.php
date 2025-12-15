<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\VelocitySensor;

// require_once __DIR__ . '/../vendor/autoload.php';
// Comentado por que no ahora he configurado el bootstrap y no hace falta indicar el directorio. 


class VelocitySensorTest extends TestCase {

    public function testMoltLent(){
        $vs1 = new VelocitySensor(17);
        $this->assertEquals("Molt lent", $vs1->showLvl());
    }

    public function testVelocitatAdecuada(){
        $vs2 = new VelocitySensor(33);
        $this->assertEquals("Velocitat adequada", $vs2->showLvl());
    }

    public function testExcesLleu(){
        $sv3 = new VelocitySensor(62);
        $this->assertEquals("Excés lleu", $sv3->showLvl());
    }

    public function testExcesModerat(){
        $sv4 = new VelocitySensor(92);
        $this->assertEquals("Excés moderat", $sv4->showLvl());
    }

    public function testExcesGreu(){
        $sv5 = new VelocitySensor(200);
        $this->assertEquals("Excés greu", $sv5->showLvl());
    }


}
