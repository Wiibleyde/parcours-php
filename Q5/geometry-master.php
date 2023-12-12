<?php
abstract class AbstractGeometry {
    abstract public function area();
    abstract public function perimeter();
}

class Rectangle extends AbstractGeometry {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }

    public function perimeter() {
        return 2 * ($this->width + $this->height);
    }
}

class Square extends AbstractGeometry {
    private $width;

    public function __construct($width) {
        $this->width = $width;
    }

    public function area() {
        return $this->width * $this->width;
    }

    public function perimeter() {
        return 4 * $this->width;
    }
}

class Triangle extends AbstractGeometry {
    private $side1;
    private $side2;
    private $side3;

    public function __construct($side1, $side2, $side3) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function area() {
        $s = ($this->side1 + $this->side2 + $this->side3) / 2;
        return sqrt($s * ($s - $this->side1) * ($s - $this->side2) * ($s - $this->side3));
    }

    public function perimeter() {
        return $this->side1 + $this->side2 + $this->side3;
    }
}
?>