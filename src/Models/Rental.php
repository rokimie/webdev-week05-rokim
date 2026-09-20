<?php

namespace App\Models;

use App\Contracts\Billable;

class Rental implements Billable
{
    private $vehicle;
    private $customerName;
    private $days;

    public function __construct($vehicle, $customerName, $days)
    {
        $this->vehicle = $vehicle;
        $this->customerName = $customerName;
        $this->days = $days;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function getDays()
    {
        return $this->days;
    }

    // Required by the Billable interface
    // Logic: 10% discount if rented for 7 days or more
    public function calculateTotal()
    {
        $total = $this->vehicle->getDailyRate() * $this->days;

        if ($this->days >= 7) {
            $total = $total * 0.90;
        }

        return $total;
    }
}
