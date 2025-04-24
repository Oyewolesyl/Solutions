<?php
$seconds = 221108521;

$minutes = floor($seconds / 60);
$hours = floor($minutes / 60);
$days = floor($hours / 24);
$weeks = floor($days / 7);
$months = floor($days / 31);
$years = floor($days / 365);

// Remainders
$remaining_seconds = $seconds % 60;
$remaining_minutes = $minutes % 60;
$remaining_hours = $hours % 24;
$remaining_days = $days % 7;
$remaining_weeks = $weeks % 4;
$remaining_months = $months % 12;

echo "Original seconds: $seconds\n";
echo "That is approximately:\n";
echo "$years years\n";
echo "$remaining_months months\n";
echo "$remaining_weeks weeks\n";
echo "$remaining_days days\n";
echo "$remaining_hours hours\n";
echo "$remaining_minutes minutes\n";
echo "$remaining_seconds seconds\n";
?>
