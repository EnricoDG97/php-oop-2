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
}