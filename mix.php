<?php
function calculatePlantingMix($totalAmount) {
    // Percentages
    $soilPercent = 0.80;
    $fertilizerPercent = 0.10;
    $waterPercent = 0.05;
    $seedsPercent = 0.05;

    // Calculate each component amount
    $soil = $totalAmount * $soilPercent;
    $fertilizer = $totalAmount * $fertilizerPercent;
    $water = $totalAmount * $waterPercent;
    $seeds = $totalAmount * $seedsPercent;

    return [
        'soil' => $soil,
        'fertilizer' => $fertilizer,
        'water' => $water,
        'seeds' => $seeds,
    ];
}

// Example usage:
$totalMix = 100; // total amount in kilograms or liters
$mix = calculatePlantingMix($totalMix);

echo "For a total of $totalMix units:\n";
echo "Soil: " . $mix['soil'] . " units\n";
echo "Fertilizer: " . $mix['fertilizer'] . " units\n";
echo "Water: " . $mix['water'] . " units\n";
echo "Seeds: " . $mix['seeds'] . " units\n";
?>
