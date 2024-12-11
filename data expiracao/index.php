<?php

function myFunction() {
    // Your function code here
    echo "Function executed!\n";
}

// $targetDate = '2024-06-01 00:00:10'; // Change this to your desired date

$dateBofore = date('Y-m-d h:i:10');

// $dateBofore = time() -30;
// $currentDate = date('Y-m-d h:i:-30');
// if ($currentDate === $targetDate) {
//     myFunction();
// }

// $init = $dateBofore;
// $hours = floor($init / 3600);
// $minutes = floor(($init / 60) % 60);
// $seconds = $init % 60;

// echo "$hours:$minutes:$seconds";

// echo $dateBofore.'<br>';

// echo $dateBofore;

// $data = date('Y-m-d');
// echo $data;

// Get the current time and subtract 30 seconds
$current_time = current_time('timestamp');
$time_minus_30_seconds = $current_time - 30;

// Format the time_minus_30_seconds to display hours, minutes, and seconds
$formatted_time = date('H:i:s', $time_minus_30_seconds);

echo 'Current time minus 30 seconds: ' . $formatted_time;

// mostrar tempo atual
current_time('Y-m-d H:i:s');
  // tempo atual em segundos
  echo current_time('timestamp');