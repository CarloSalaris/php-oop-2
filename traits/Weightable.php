<?php

trait Weightable {

    private $weight;

    public function getWeight() {

        return $this -> weight;
    }
    public function setWeight($weight) {

        if ($weight <= 0) {

            throw new Exception("Weight can't be negative");
        }

        $this -> weight = $weight;
    }
}

