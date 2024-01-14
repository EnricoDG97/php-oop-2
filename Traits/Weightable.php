<?php

trait Weightable {
    private $weight;

    public function setWeight($_weight) {
        if($_weight > 0.1) {
            $this->weight = $_weight;
            return 'Articolo con peso';
        } else {
            return 'Articolo senza peso';
        }
    }

    public function getWeight() {
        return $this->weight . 'kg';
        if ($this->getWeight() === null || $this->getWeight() === 0) {
            throw new Exception('Peso non impostato correttamente per il prodotto ' . $this->name);
        }
    }
}