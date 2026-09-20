<?php

namespace App\Models;

class Vehicle
{
    private $model;
    private $dailyRate;
    private $available;

    public function __construct($model, $dailyRate)
    {
        $this->model = $model;
        $this->dailyRate = $dailyRate;
        $this->available = true;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getDailyRate()
    {
        return $this->dailyRate;
    }

    public function isAvailable()
    {
        return $this->available;
    }

    // Logic: only rent the vehicle if it is available
    public function rent()
    {
        if ($this->available) {
            $this->available = false;
            return true;
        }
        return false;
    }
}
