<?php

namespace App;


class VelocitySensor {
    private int $velocity;

    public function __construct(int $velocity){
        $this->velocity = $velocity;
    }


    public function showLvl(): string {
        if ($this->velocity < 30){
            return "Molt lent";
        }
        if ($this->velocity >= 30 && $this->velocity <= 60){
            return "Velocitat adequada";
        }
        if ($this->velocity > 60 && $this->velocity <= 80){
            return "Excés lleu";
        }
        if ($this->velocity > 80 && $this->velocity <= 100){
            return "Excés moderat";
        }
        return "Excés greu";

    }
}

$coche1 = new VelocitySensor(45);

echo $coche1->showLvl();


