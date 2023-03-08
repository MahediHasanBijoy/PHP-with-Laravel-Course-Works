<?php
// hexadecimal to color conversion


class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode){
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($colorCode){
        $this->color = ltrim($colorCode, "#");
    }

    private function parseColor(){
        list($this->red, $this->green, $this->blue) = sscanf($this->color, "%02x%02x%02x");

    }
}

$myColor = new RGB("#ff0020");

