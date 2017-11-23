<?php

$json = 'https://use.gameapis.net/mc/query/players/box.spleefleague.com';
$content = file_get_contents($json);
$json = json_decode($content, true);

$online = $json['players']['online'];
