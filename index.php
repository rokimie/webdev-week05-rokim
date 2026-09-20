<?php

require __DIR__ . '/vendor/autoload.php';

use App\Models\Vehicle;
use App\Models\Rental;

// Create two vehicles
$vios = new Vehicle("Toyota Vios", 1500);
$civic = new Vehicle("Honda Civic", 2500);

echo "=== Vehicle Rental Tracker ===\n";

// Rent them
$vios->rent();
$civic->rent();

// Create two rentals
$rental1 = new Rental($vios, "Juan Dela Cruz", 3);
$rental2 = new Rental($civic, "Maria Santos", 7);

echo $rental1->getCustomerName() . " rented " . $vios->getModel()
    . " for " . $rental1->getDays() . " days. Total: PHP "
    . $rental1->calculateTotal() . "\n";

echo $rental2->getCustomerName() . " rented " . $civic->getModel()
    . " for " . $rental2->getDays() . " days. Total: PHP "
    . $rental2->calculateTotal() . " (10% discount applied)\n";

// Check availability
echo "\nIs Toyota Vios available? ";
echo $vios->isAvailable() ? "Yes\n" : "No\n";
