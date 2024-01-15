<?php

trait Weightable {
    private $weight;

    public function setWeight($_weight) {
        if ($_weight > 0.1) {
            $this->weight = $_weight;
            return 'Articolo con peso';
        } else {
            return 'Articolo senza peso';
        }
    }

    public function getWeight() {
        if ($this->weight === null || $this->weight === 0) {
            throw new Exception('Peso non impostato correttamente per il prodotto ' . $this->name);
        }
        return $this->weight . 'kg';
    }
}