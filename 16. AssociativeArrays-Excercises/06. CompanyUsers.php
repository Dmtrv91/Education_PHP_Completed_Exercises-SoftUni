<?php

$company = [];

while (($input = readline()) !="End") {
    $args = explode(" -> ", $input);
    $companyName = $args[0];
    $employeeID = $args[1];
    if (!key_exists($companyName, $company)) {
        $company[$companyName] = [];
    } else if (in_array($employeeID, $company[$companyName])) {
        continue;
    }
    $company[$companyName][] = $employeeID;
}

ksort($company);

foreach ($company as $key => $value) {
    echo $key.PHP_EOL;
    foreach ($value as $id) {
        echo"-- ".$id.PHP_EOL;
    }
}


?>