<?php

class Category {

    private $name;
    private $icon;

    public function __construct($name, $icon) {
        
        $this -> setCategName($name);
        $this -> setIcon($icon);
    }

    public function getCategName() {

        return $this -> name;
    }

    public function setCategName($name) {
        
        if ($name != "Cani" AND $name != "Gatti") {
       
            throw new Exception("Category needs to be 'Cani' or 'Gatti'.");

        }

        $this -> name = $name;
    }

    public function getIcon() {
        
        return $this -> icon;
    }
    
    public function setIcon($icon) {

        $this -> icon = $icon;

    }

}