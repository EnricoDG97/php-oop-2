<?php

require_once __DIR__ . '/Product.php';

class Bed extends Product {
    protected $size;

    public function __construct($_name, Category $category, $_price, $_availability, $_size, $_weight = 0)
    {
        parent::__construct($_name, $category, $_price, $_availability, $_weight);
        $this->size = $_size;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    public function getInfo()
    {
        return 'Dimensioni: ' . $this->size;
    }
}