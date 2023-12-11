<?php
class Magic {
    public string $card = 'As';

    public function __construct() {
        echo "Magic class constructed.\n";
    }

    public function __destruct() {
        echo "Magic class destructed.\n";
    }

    public function __get($property) {
        echo "Getting '$property'.\n";
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        echo "Setting '$property' to '$value'.\n";
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __isset($property) {
        echo "Is '$property' set?\n";
        return isset($this->$property);
    }

    public function __toString() {
        echo "Magic class to string.\n";
        return $this->card;
    }
}
?>