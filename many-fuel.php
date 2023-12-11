<?php
class Car {
    private float $tank = 0;

    public function getTank(): float {
        return $this->tank;
    }

    public function setTank(float $gallons): self {
        $this->tank += $gallons;
        return $this;
    }

    public function ride(float $kilometers): self {
        $gallonsConsumed = $kilometers / 20;
        $this->tank -= $gallonsConsumed;
        return $this;
    }
}
?>