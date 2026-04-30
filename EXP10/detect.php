<?php
$threshold = 5;
$attempts = [];

$lines = file("logs.txt");

foreach($lines as $line){
    $parts = explode(" ", $line);
    $ip = $parts[0];
    $status = trim(end($parts));

    if($status == "FAILED"){
        if(!isset($attempts[$ip])){
            $attempts[$ip] = 0;
        }
        $attempts[$ip]++;
    }
}

echo "<h2>Incident Detection</h2>";

foreach($attempts as $ip => $count){
    if($count >= $threshold){
        echo "🚨 Attack detected from $ip ($count attempts)<br>";

        file_put_contents("blocked_ips.txt", "$ip\n", FILE_APPEND);
    }
}
?>
