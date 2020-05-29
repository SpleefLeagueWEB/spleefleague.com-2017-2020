<?php

$json = 'https://mcapi.us/server/status?ip=play.spleefleague.com';
$content = file_get_contents($json);
$json = json_decode($content, true);

if ($json['online'] == true){
    $online = "Players Online: " . $json['players']['now'];
} else {
    $online = "The server is currently offline!";
}