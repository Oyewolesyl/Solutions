<?php
// 2D associative array for categorized vehicles
$vehicles = [
    "landVehicles" => ["Vespa", "Bicycle"],
    "waterVehicles" => ["Surfboard", "Raft", "Schooner", "Three-master"],
    "airVehicles" => ["Hot air balloon", "Helicopter", "B52"]
];

// Output the structure of the array
echo "<pre>";
var_dump($vehicles);
echo "</pre>";
?>
