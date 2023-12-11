<?php
interface PoolTempsInterface {
    public function getActualTemp(): int;
    public function getLastDaysTemps(): array;
    public function setHeater(bool $status): void;
}

class PoolTemps implements PoolTempsInterface {
    private int $actualTemp;
    private array $lastDaysTemps;
    public bool $isActive = false;

    public function __construct(int $actualTemp, array $lastDaysTemps) {
        $this->actualTemp = $actualTemp;
        $this->lastDaysTemps = $lastDaysTemps;
    }

    public function getActualTemp(): int {
        return $this->actualTemp;
    }

    public function getLastDaysTemps(): array {
        return $this->lastDaysTemps;
    }

    public function setHeater(bool $status): void {
        $this->isActive = $status;
    }

    public function activateHeater(): void {
        $averageTemp = array_sum($this->lastDaysTemps) / count($this->lastDaysTemps);
        if ($averageTemp > 20 && $this->actualTemp >= 25) {
            $this->setHeater(true);
        }
    }
}
?>