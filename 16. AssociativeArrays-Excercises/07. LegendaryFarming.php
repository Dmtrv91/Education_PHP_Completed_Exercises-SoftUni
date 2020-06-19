<?php

$keyMaterials = ["fragments" => 0, "motes" => 0, "shards" => 0];
$junkMaterials = [];
$prizeMap = ["shards" => "Shadowmourne", "fragments" => "Valanyr", "motes" => "Dragonwrath"];
$win = false;

while (!$win) {
    $arr = explode(" ", readline());
    for ($i = 0; $i < count($arr); $i += 2) {
        $sum = intval($arr[$i]);
        $nameMaterial = strtolower($arr[$i + 1]);
        if (key_exists($nameMaterial, $keyMaterials)) {
            $keyMaterials[$nameMaterial] += $sum;
            if ($keyMaterials[$nameMaterial] >= 250) {
                $keyMaterials[$nameMaterial] -= 250;
                $win = true;
                break;
            }
            continue;
        }
        if (!key_exists($nameMaterial, $junkMaterials)) {
            $junkMaterials[$nameMaterial] = 0;
        }
        $junkMaterials[$nameMaterial] += $sum;
    }
}

echo "{$prizeMap[$nameMaterial]} obtained!" . PHP_EOL;
arsort($keyMaterials);

foreach ($keyMaterials as $key => $val) {
    echo "$key: $val" . PHP_EOL;
}

ksort($junkMaterials);

foreach ($junkMaterials as $key => $val) {
    echo "$key: $val" . PHP_EOL;
}

?>