<?php

require_once __DIR__ . "/NumberChecker.php";

use PHPUnit\Framework\TestCase;


class NumberCheckerTest extends TestCase {
    
    public function testIsEven() {
        $nc = new NumberChecker(2);
        $this->assertTrue($nc->isEven());

        $nc2 = new NumberChecker(3);
        $this->assertFalse($nc2->isEven());
    }

    public function testIsPositive() {
        $nc = new NumberChecker(5);
        $this->assertTrue($nc->isPositive()); 

        $nc2 = new NumberChecker(-1);
        $this->assertFalse($nc2->isPositive()); 

        $nc3 = new NumberChecker(0);
        $this->assertFalse($nc3->isPositive()); 
    }
}

