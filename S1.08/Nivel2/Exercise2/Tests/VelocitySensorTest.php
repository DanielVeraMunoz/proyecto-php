<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\VelocitySensor;

// require_once __DIR__ . '/../vendor/autoload.php';
// Comentado por que no ahora he configurado el bootstrap y no hace falta indicar el directorio. 





class VelocitySensorTest extends TestCase {



    public function velocitySensorProvider(){
        return [
        [17, "Molt lent"],
        [33, "Velocitat adequada"],
        [62, "Excés lleu"],
        [92, "Excés moderat"],
        [200, "Excés greu"]
        ];
    }

/**
 * @dataProvider velocitySensorProvider
 */

    public function testShowLvl($number, $expected){
        $vs1 = new VelocitySensor($number);
        $this->assertSame($expected, $vs1->showLvl());
    }
}