<?php

namespace App\Contracts;

interface Billable
{
    public function calculateTotal();
}
