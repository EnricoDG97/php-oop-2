<?php
require_once __DIR__ . "/Category.php";

class Product 
{
    public $name;
    protected $category;
    private $price;
    protected $availability;

    public function __construct($_name, Category $category, $_price, $_availability)
    {
        $this->name = $_name;
        $this->category = $category;
        $this->setPrice($_price);
        $this->availability = $_availability;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */ 
    public function setPrice($price)
    {
        if($price > 0) {
            $this->price = number_format($price, 2, '.', '');
        } else {
            return false;
        }
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of availability
     */ 
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set the value of availability
     *
     * @return  self
     */ 
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }
}