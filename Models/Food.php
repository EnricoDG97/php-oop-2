<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    protected $expiration_date;

    public function __construct($_name, Category $category, $_price, $_availability, $_expiration_date)
    {
        parent::__construct($_name, $category, $_price, $_availability);
        $this->setExpiration_date($_expiration_date);
    }

    /**
     * Set the value of expiration_date
     */ 
    public function setExpiration_date($expiration_date)
    {
        $stringToDate = strtotime($expiration_date);
        if ($stringToDate === false) {
            return false;
        }
        $formatted_date = date('Y-m-d', $stringToDate);
        $this->expiration_date = $formatted_date;
        return $this;
    }

    /**
     * Get the value of expiration_date
     */ 
    public function getExpiration_date()
    {
        return $this->expiration_date;
    }
}