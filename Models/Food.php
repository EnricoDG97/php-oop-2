<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    public $expiration_date;

    public function __construct($_name, Category $category, $_price, $_availability, $_expiration_date, $_weight = 0)
    {
        parent::__construct($_name, $category, $_price, $_availability, $_weight);
        $this->setExpiration_date($_expiration_date);
    }

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

    public function getExpirationDate()
    {
        return 'Data di Scadenza: ' . $this->expiration_date;
    }

    /**
     * Get the value of expiration_date
     */ 
    public function getInfo()
    {
        return 'Data di Scadenza: ' . $this->expiration_date;
    }
}