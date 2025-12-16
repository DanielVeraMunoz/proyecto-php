<?php

require_once __DIR__ . "/NumberChecker.php";

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase {
    

    public function isEvenProvider(){
        return [
            [2, true],
            [3, false],
            [4, true],
            [5, false]
        ];
    }

    public function isPositive(){

    }

 /** 
  * @dataProvider isEvenProvider
 */ 

    public function testIsEven($number, $expected) {
        
        $nc = new NumberChecker($number);
        
        $this->assertSame($expected, $nc->isEven());
    }


public function isPositiveProvider(){
    return [
        [23, true],
        [-2, false],
        [10, true],
        [-245, false]
    ];
}

 /** 
  * @dataProvider isPositiveProvider
 */ 

    public function testIsPositive($number, $expected) {
       
        $nc = new NumberChecker($number);
        
        $this->assertSame($expected, $nc->isPositive()); 
    }
}

