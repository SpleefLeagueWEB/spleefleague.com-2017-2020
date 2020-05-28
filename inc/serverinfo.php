<?php

$json = 'https://mcapi.us/server/status?ip=box.spleefleague.com';
$content = file_get_contents($json);
$json = json_decode($content, true);


if (isset($json['online'])){
    $online = "Players Online: " . $json['players']['now'];
} else {
    $online = "The server is currently offline!";
}
