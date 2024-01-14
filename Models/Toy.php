<?php

require_once __DIR__ . '/Product.php';
class Toy extends Product {
    protected $height;
    protected $width;

    public function __construct($_name, Category $category, $_price, $_availability, $_height, $_width)
    {
        parent::__construct($_name, $category, $_price, $_availability);
        $this->height = $_height;
        $this->width = $_width;
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}